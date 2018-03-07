<?php

$calling_codes = [
    'AR' => '+54',
    'CZ' => '+420',
    'DE' => '+49',
    'HU' => '+36',
    'US' => '+1'
];

$country_names = [
    'US' => 'USA',
    'HU' => 'Hungary',
    'CZ' => 'Czechia',
    'AR' => 'Argentina',
    'DE' => 'Germany',
    'DK' => 'Denmark',
    'IN' => 'India'
];


//initial answer

$result = array_merge($country_names, $calling_codes);
print_r($result);

echo '<hr>';

foreach($result as $key=>$value) {
    echo "The calling code of $key is $value <br> ";
};

foreach($result as $key) {
    echo "The calling code of $key is $value <br> ";
};



echo '<hr>';

foreach($result as $key=>$value) {
    echo "The calling code of $key is $value <br> ";
};

echo 'flipped country names';
echo '<br>';
$flipped_country_names = array_flip ($country_names);
print_r($flipped_country_names);
$result_after_flipped = array_merge($calling_codes ,$flipped_country_names );
print_r($result_after_flipped);
foreach($result_after_flipped as $key=>$value) {
    echo "The calling code of $key is $value <br> ";
};
echo '<hr>';

$result = array_merge($calling_codes, $flipped_country_names);
print_r($result_after_flipped);

foreach($result_after_flipped as $key=>$value) {
    echo "The calling code of $key is $value <br> ";
};

echo '<hr>';

foreach($result as $key=>$value) {
    echo "The calling code of $key is $value <br> ";
};

echo '<hr>';

$result = $country_names + $calling_codes;
print_r($result);

echo '<hr>';


foreach($calling_codes as $key=>$value) {
    echo "The calling code of USA is  $value <br> ";
};

foreach (array_combine($calling_codes, $country_names) as $code => $name) {
    echo '<option value="' . $name . '">' . $code . '</option>';
}

?>