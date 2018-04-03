<?php

function download_from_internet($url)
{
    $ch = curl_init();
//  curl_setopt($ch, CURLOPT_COOKIEFILE, CACHE_DIR . DIRECTORY_SEPARATOR . 'cookies.txt');
//  curl_setopt($ch, CURLOPT_COOKIEJAR, CACHE_DIR . DIRECTORY_SEPARATOR . 'cookies.txt');
//  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_HTTPGET, true);
    curl_setopt($ch, CURLOPT_URL, $url);
    $source = curl_exec ($ch);

    return $source;
}

define('CACHE_DIR', dirname(__FILE__) . DIRECTORY_SEPARATOR . 'cache');

/**
 * @param string $url
 * @param int $ttl Time To Live seconds (86400 = 60*60*24)
 * @return mixed|string
 */

function download_with_cache($url, $ttl = 86400)
{
    $cache_file = CACHE_DIR . DIRECTORY_SEPARATOR . strtr($url, ':/?|#=', '......');

    // this lines will check and create a cache directory if there is none
    if (!is_dir(CACHE_DIR)) {
        mkdir(CACHE_DIR, 0777);
    }

    if (
        is_file($cache_file)
        &&
        filemtime($cache_file) > time() - $ttl)
    {
        $contents = file_get_contents($cache_file);
    } else {
        $contents = download_from_internet($url);
        file_put_contents($cache_file, $contents);
    }

    return $contents;
}



$url = "http://www.imdb.com/genre/";

$contents = download_with_cache($url);

$contents = substr($contents, strpos($contents, '<div id="main"'));
preg_match_all('@img itemprop="image" class="pri_image" title="([^"]+)"@ims', $contents, $results);

//$contents = substr($contents, 0, strpos($contents, '</table'));
//$contents = strip_tags($contents, '<a>');
//foreach (explode("\n", $contents) as $line) {
    //if (strpos($line, '&#xBB;') !== false) {
        //echo "'" , trim(str_replace('&#xBB;', '', strip_tags($line))) , "',\n";
    //}
//}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<select>
<?php foreach ($results[1] as $id => $option) printf('<option value="%d">%s</option>', $id, $option); ?>
</select>
</body>
</html>
