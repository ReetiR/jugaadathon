<?php

$thumb = new Imagick();
$thumb->readImage('dave.jpg');    $thumb->resizeImage(20,20);
$thumb->writeImage('dave.jpg');
$thumb->clear();
$thumb->destroy();

$im = imagecreatefromjpeg('dave.jpg');

if($im && imagefilter($im, IMG_FILTER_GRAYSCALE))
{
    echo 'Image converted to grayscale.';

    imagejpeg($im, 'dave.jpg');
}
else
{
    echo 'Conversion to grayscale failed.';
}

imagedestroy($im);
?>