<?php
/**
 * Created by PhpStorm.
 * User: 1y0n
 * Date: 17/01/26
 * Time: 上午 11:40
 */
require 'base.php';
echo '<h2 align="center" class="title">UP-5</h2>';
echo '<p class="target">TARGET: Execute a .php file</p>';
require 'foot.php';
error_reporting(0);

echoinfo($_FILES);

if (getimagesize("upload/" . $_FILES["file"]["name"])){
    echo "Uploaded To: " . "upload/" . $_FILES["file"]["name"];
}else{
    unlink("upload/".$_FILES["file"]["name"]);
    die("<p class='warn'>File is dangerous and has been deleted!</p>");
}