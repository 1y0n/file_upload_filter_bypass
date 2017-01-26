<?php
/**
 * Created by PhpStorm.
 * User: 1y0n
 * Date: 17/01/26
 * Time: 下午 12:27
 */
require 'base.php';
echo '<h2 align="center" class="title">UP-7</h2>';
$test = exif_imagetype("index.php");
if (empty($test)) {
    echo '<p class="warn">WARNING: Turn extension=php_exif.dll ON and RESTART your server before you start this exercise</p>';
}
require 'foot.php';
error_reporting(0);

echoinfo($_FILES);

$filetype = exif_imagetype("upload/".$_FILES["file"]["name"]);
echo $filetype;
if (($filetype == IMAGETYPE_GIF) || ($filetype == IMAGETYPE_JPEG) || ($filetype == IMAGETYPE_PNG)){
    echo "Uploaded To: " . "upload/" . $_FILES["file"]["name"];
}
else{
    unlink("upload/".$_FILES["file"]["name"]);
    die("<p class='warn'>File is dangerous and has been deleted!</p>");
}
