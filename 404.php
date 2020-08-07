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

    <title>Page not found</title>

    <?php include "read/res.php";?>
    <style><?php include "css/font.css.php"?></style>
    <script src="js/darkmode.js"></script>
    <link rel="stylesheet" type="text/css" href="css/darkmode.css"/>
    <link rel="stylesheet" type="text/css" href="css/homebutton.css"/>
    <link rel="stylesheet" type="text/css" href="css/404.css"/>
</head>
<body>
<script>document.body.classList += dark_mode_class_name;</script>
<script src="js/404.js"></script>

<div id="home-button-div">
    <a id="home-button-a" href=".">
        <img id="home-button-img" src="res/home/dog.svg">
    </a>
</div>
<div id="dark-mode-div">
    <label id="dark-mode-label">
        <input type="checkbox" id="dark-mode-input" onclick="dark_mode_clicked()">
        <img id="dark-mode-sun-img" class="dark-mode-img black-foreground" src="<?php echo $home["sun"]?>"/>
        <img id="dark-mode-moon-img" class="dark-mode-img white-foreground" src="<?php echo $home["moon"]?>"/>
    </label>
</div>
<div id="errordiv">
    <p id="errortext">
        404
    </p>
</div>
</body>
</html>
