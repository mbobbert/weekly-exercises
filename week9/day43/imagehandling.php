<?php

$source = imagecreatefromjpeg('hovercat.jpg');

$target = imagecreatetruecolor(300, 300);

list($source_width, $source_height) = getimagesize('hovercat.jpg');

imagecopyresized($target, $source, 0, 0, 0, 0, 300, 300, $source_width, $source_height);

$textcolor = imagecolorallocate($target, 0, 0, 255);
imagestring($target, 5, 0, 0, 'Hello hovercat!', $textcolor);


header('Content-type: image/jpeg');
imagejpeg($target, null, 90);