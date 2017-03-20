<?php
/**
 * Created by PhpStorm.
 * User: 1y0n
 * Date: 17/01/26
 * Time: 上午 09:33
 */
require 'base.php';?>

<h2 align="center" class="title">UP-1</h2>
<p id="warn" class="warn">WARNING: Don't forbid JavaScript in this page!</p>

<script type='text/javascript'>
    document.getElementById("warn").style.display = 'none';
    function checkfile(ths){
        if (ths.value == "") {
            alert("Choose a picture first!");
            return false;
        } else {
            if (!/\.(gif|jpg|jpeg|png|GIF|JPG|PNG)$/.test(ths.value)) {
                alert("Only .gif,jpeg,jpg,png allowed");
                ths.value = "";
                return false;
            }
        }
        return true;
    }
</script>

<div class="pure-u-6-24"></div>
<div class="pure-u-12-24">
    <form action="" method="post" enctype="multipart/form-data" name="upload" class="upload" onsubmit="return checkfile(file)">
        <input type="hidden" name="MAX_FILE_SIZE" value="999999999">
        Choose File：<input type="file" name="file">
        <input type="submit" name="submit" class="pure-button upload-button" value="Upload">
    </form>
    <div class="info">

<?php
error_reporting(0);
echoinfo($_FILES);
?>
</div>
</div>
