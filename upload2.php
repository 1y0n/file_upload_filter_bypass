<?php
/**
 * Created by PhpStorm.
 * User: 1y0n
 * Date: 17/01/26
 * Time: 上午 11:01
 */
require 'base.php';
echo '<h2 align="center" class="title">UP-2</h2>';
require 'foot.php';
error_reporting(0);
if ((($_FILES["file"]["type"] == "image/gif")
        || ($_FILES["file"]["type"] == "image/jpeg")
        || ($_FILES["file"]["type"] == "image/pjpeg"))
    && ($_FILES["file"]["size"] < 2000000))
{
    echoinfo($_FILES);
}
else
{
    die("Not allowed!");
}