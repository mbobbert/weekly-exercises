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

?>
<html>
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Month', 'EUR', 'USD'],
                <?php
                for ($month = 1; $month <= 11; $month++) {
                    $contents = download_with_cache("http://www.cnb.cz/cs/financni_trhy/devizovy_trh/kurzy_devizoveho_trhu/denni_kurz.txt?date=01.{$month}.2017");
                    echo "['01.{$month}.2017'";

                    foreach (explode("\n", $contents) as $line) {
                        $line_data = str_getcsv($line, "|");

                        if (isset($line_data[3]) && ($line_data[3] == 'EUR' || $line_data[3] == 'USD')) {

                            echo ', ' , str_replace(',', '.', $line_data[4]);
                        }
                    }
                    echo "],\n";

                }
                ?>
            ]);

            var options = {
                title: 'EUR and USD to CZK in 2017',
                curveType: 'function',
                legend: { position: 'bottom' }
            };

            var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

            chart.draw(data, options);
        }
    </script>
</head>
<body>
<div id="curve_chart" style="width: 900px; height: 500px"></div>
</body>
</html>
