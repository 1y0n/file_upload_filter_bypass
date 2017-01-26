<?php
/**
 * Created by PhpStorm.
 * User: 1y0n
 * Date: 17/01/26
 * Time: 下午 12:43
 */
require 'base.php';
echo '<h2 align="center" class="title">UP-8</h2>';
echo '<p class="hint">HINT: XSS. You may need Linux OS.</p>';
require 'foot.php';
error_reporting(0);

function getextension($filename){
    $info = pathinfo($filename);
    return $info[extension];
}

echoinfo($_FILES);

$newname = $_FILES['file']['name'];
$filetype = getextension("upload/".$newname);
if (($filetype == 'jpg') || ($filetype == 'gif') || ($filetype == 'png')){
}
else{
    $newname = 'upload/'.$newname.'.jpg';
    rename("upload/".$_FILES['file']['name'], $newname);
    die("<p class='warn'>File is dangerous and has been renamed!</p>");
}