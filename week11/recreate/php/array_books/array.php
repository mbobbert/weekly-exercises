<?php

$books = [
    [
        'author' => 'Milo Yiannopoulos',
        'title' => 'Dangerous',
        'price' => '$15.62'
    ],
    [
        'author' => 'Margaret Atwood',
        'title' => 'The Handmaid\'s Tale',
        'price' => '$8.69'
    ],
    [
        'author' => 'George Orwell',
        'title' => '1984',
        'price' => '$7.09'
    ],
    [
        'author' => 'Rupi Kaur',
        'title' => 'Milk and Honey',
        'price' => '$8.99'
    ],
    [
        'author' => 'Neil Gaiman',
        'title' => 'Norse Mythology',
        'price' => '$15.57'
    ]
];


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

foreach($calling_codes as $key=>$value) {
    echo "The calling code of $country_names[$key] is $value </br>";
}
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

</body>
</html>

    <table>
        <thead>
            <tr>
                <td>Author</td>
                <td>Title</td>
                <td>Price</td>
            </tr>
            <tr>
            <?php foreach($books as $book) : ?>
            <tr>
                <td><?php echo $book['author'] ?></td>
                <td><?php echo $book['title']  ?></td>
                <td><?php echo $book['price']  ?></td>
            </tr>
            <?php endforeach ?>
            </tr>
        </thead>
    </table>



}