<?php
/**
 * Created by PhpStorm.
 * User: 1y0n
 * Date: 17/01/26
 * Time: 上午 11:01
 */
require 'base.php';
echo '<h2 align="center" class="title">UP-3</h2>';
echo '<p class="target">TARGET: Upload and execute a .php file</p>';
require 'foot.php';
error_reporting(0);

function getextension($filename){
    $info = pathinfo($filename);
    return $info[extension];
}

if (getextension($_FILES['file']['name']) != 'php'){
    if ($_FILES["file"]["error"] > 0)
    {
        echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }else{
        echoinfo($_FILES);
    }
}else{
    echo "Not Allowed";
}