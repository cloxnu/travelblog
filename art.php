<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="shortcut icon" type="image/x-icon" href="res/home/favicon32.ico">
    <link rel="icon" type="image/x-icon" href="res/home/favicon32.ico">
    <link rel="apple-touch-icon" sizes="57x57" href="res/home/favicon72.png">
    <link rel="apple-touch-icon" sizes="72x72" href="res/home/favicon57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="res/home/favicon114.png">
    <link rel="apple-touch-icon" sizes="144x144" href="res/home/favicon144.png">

    <title>Travel & Life - 一只狗的火星旅行计划</title>

    <?php include "read/res.php";?>
    <style><?php include "css/font.css.php"?></style>
    <script src="read/res.js"></script>
    <script src="js/darkmode.js"></script>
    <script src="js/loading.js"></script>
    <script src="js/marked.min.js"></script>
    <script src="js/read.js"></script>
    <script src="js/cdnbutton.js"></script>
    <link rel="stylesheet" type="text/css" href="css/darkmode.css"/>
    <link rel="stylesheet" type="text/css" href="css/loading.css"/>
    <link rel="stylesheet" type="text/css" href="css/homebutton.css"/>
    <link rel="stylesheet" type="text/css" href="css/cdnbutton.css"/>
    <link rel="stylesheet" type="text/css" href="css/art.css"/>
    <link rel="stylesheet" type="text/css" href="css/typography.css"/>
</head>
<body class="loading touch">
<script>document.body.classList.add(dark_mode_class_name);</script>

<?php include_once "template/homeButton.php"?>
<?php include_once "template/darkmodeButton.php"?>
<?php include_once "template/loading.php"?>

<div id="head" class="dark-mode-on">
    <img src="" id="cover-img"/>
    <span id="cover-shadow"></span>
    <div id="head-text">
        <div id="title"></div>
        <div id="class"></div>
    </div>
</div>
<div id="info">
    <span id="creation-date"></span>
    <?php include_once "template/cdnbutton.php"?>
</div>
<!--<hr>-->
<div id="content"></div>
<div id="end">END</div>

</body>

<script src="js/touch.js"></script>
<script src="js/add_title_link.js"></script>
<script src="js/loading_transition.js"></script>
<script src="js/art.js"></script>
</html>