<?php
//include TextToImage class
require_once 'TextToImage.php';

//create img object
$img = new TextToImage;

//create image from text
$text = 'محمد رضا نصاری اصل';
$img->createImage($text);

//display image
$img->showImage();

//save image as png format
$img->saveAsPng('codex-text-to-image','images/');

//save image as jpg format
$img->saveAsJpg('codex-text-to-image','images/');