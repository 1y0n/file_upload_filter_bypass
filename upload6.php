<?php
/**
 * Created by PhpStorm.
 * User: 1y0n
 * Date: 17/01/26
 * Time: 上午 11:52
 */
require 'base.php';
echo '<h2 align="center" class="title">UP-6</h2>';
echo '<p class="target">TARGET: Execute a .php file</p>';
require 'foot.php';
error_reporting(0);

function getfiletype($filename){
    $file = fopen($filename, 'rb');
    $bin = fread($file, 2);
    fclose($file);
    $strinfo = @unpack('C2chars', $bin);
    $typecode = intval($strinfo['chars1'].$strinfo['chars2']);
    $filetype = '';
    switch($typecode){
        case 255216: $filetype = 'jpg'; break;
        case 7173: $filetype = 'gif'; break;
        case 13780: $filetype = 'png'; break;
        case 6677: $filetype = 'bmp';break;
        default: $filetype = 'unknown';
    }
    return $filetype;
}

echoinfo($_FILES);

if (getfiletype("upload/".$_FILES["file"]["name"]) != 'unknown'){
    echo "Uploaded To: " . "upload/" . $_FILES["file"]["name"];
}else{
    unlink("upload/".$_FILES["file"]["name"]);
    die("<p class='warn'>File is dangerous and has been deleted!</p>");
}
