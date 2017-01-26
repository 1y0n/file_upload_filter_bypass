<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>

    <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">

</head>
<style>
    body{
        background-color: #dddddd;
        font-family: Arial, "Microsoft YaHei";
        color: #00c270;
        font-weight: 900;
    }
    .header{
        height: 7em;
        background-color: #222222;
    }
    .title{
        position: absolute;
        font-family: Arial, "Microsoft YaHei";
        font-size: 3em;
        top: -0.1em;
        color: #00c270;
        width: 200px;
        left: 50%;
        margin-left: -100px;
        text-align: center;
    }
    .upload{
        position: relative;
        top: 5em;
        text-align: center;
    }
    .upload-button{
        background-color: #00c270;
        color: white;
    }
    .warn{
        position: absolute;
        border: 2px solid red;
        color: red;
        text-align: center;
        font-family: Arial, "Microsoft YaHei";
        font-size: 1em;
        font-weight: 300;
        width: 600px;
        left: 50%;
        margin-left: -300px;
        padding: 8px;
    }
    .hint{
        position: absolute;
        border: 2px solid green;
        color: green;
        text-align: center;
        font-family: Arial, "Microsoft YaHei";
        font-size: 1em;
        font-weight: 300;
        width: 600px;
        left: 50%;
        margin-left: -300px;
        padding: 8px;
    }
    .target{
        position: absolute;
        border: 2px solid blue;
        color: blue;
        text-align: center;
        font-family: Arial, "Microsoft YaHei";
        font-size: 1em;
        font-weight: 300;
        width: 600px;
        left: 50%;
        margin-left: -300px;
        padding: 8px;
    }
    .info{
        position: relative;
        top: 8em;
        text-align: center;
        width: 1000px;
        left: 50%;
        margin-left: -500px;
    }
</style>

<body>

<div class="pure-g header">
</div>


</body>
</html>
<?php
    function echoinfo($file)
    {
        if ($_FILES["file"]["error"] > 0) {
            echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
        } else {
            echo "File Name: " . $file["file"]["name"] . "<br />";
            echo "File Type: " . $file["file"]["type"] . "<br />";
            echo "Size: " . ($file["file"]["size"] / 1024) . " Kb<br />";
            echo "Temp Name: " . $file["file"]["tmp_name"] . "<br />";
            if (file_exists("upload/" . $_FILES["file"]["name"])) {
                echo $_FILES["file"]["name"] . "Already Exist!";
            } else {
                $filename = "upload/" . $_FILES["file"]["name"];
                move_uploaded_file($_FILES["file"]["tmp_name"],
                    $filename);
                echo "Uploaded To: " . $filename . "<br />";
                echo "================================<br />Preview<br /><br /><br />";
                echo "<img src=" . $filename . " class='pure-img'>";
            }
        }
    }
?>