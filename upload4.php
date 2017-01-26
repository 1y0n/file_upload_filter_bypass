<?php
/**
 * Created by PhpStorm.
 * User: 1y0n
 * Date: 17/01/26
 * Time: 上午 11:36
 */
require 'base.php';
echo '<h2 align="center" class="title">UP-4</h2>';
echo '<p class="target">TARGET: Upload and execute a .php file</p>';
require 'foot.php';
error_reporting(0);

$_FILES["file"]["name"] = str_ireplace('.php', '', $_FILES["file"]["name"]);
echoinfo($_FILES);