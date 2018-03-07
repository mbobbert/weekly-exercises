<?php

// array of books
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

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Books</title>
</head>
<body>

    <table border="1">
        <thead>
            <tr>
                <th>Author</th>
                <th>Title</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($books as $key) : ?>
            <tr><td><?php echo $key["author"]   ?>  </td><td> <?php echo $key["title"]   ?>    </td><td> <?php echo $key["price"]   ?>   </td></tr>

            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>