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

    <title>Travel & Life</title>

    <script src="js/vue.js"></script>
    <script src="js/darkmode.js"></script>
    <script src="js/read.js"></script>
    <script src="js/home.js"></script>
    <link rel="stylesheet" type="text/css" href="css/darkmode.css"/>
    <link rel="stylesheet" type="text/css" href="css/button.css"/>
    <link rel="stylesheet" type="text/css" href="css/home.css"/>
    <?php include "read/res.php"?>
</head>

<body class>
<script>document.body.classList += dark_mode_class_name;</script>

<div id="bg-video">
    <video autoplay muted poster="<?php echo $home["head_video2_poster"]?>" id="head1">
        <source src="<?php echo $home["head_video2"]?>" type="video/mp4">
    </video>
</div>
<div id="bg-interact"></div>
<div id="dark-mode-div">
    <label id="dark-mode-label">
        <input type="checkbox" id="dark-mode-input" onclick="dark_mode_clicked()">
        <img id="dark-mode-sun-img" class="dark-mode-img" src="<?php echo $home["sun"]?>"/>
        <img id="dark-mode-moon-img" class="dark-mode-img" src="<?php echo $home["moon"]?>"/>
        <script>
            document.getElementById("dark-mode-input").checked = is_dark_mode;
            dark_mode_img_display();
        </script>
    </label>
    <script>dark_mode_label_flip()</script>
</div>
<div id="head">
    <div id="head-shelter"></div>
    <img src="<?php echo $home["travelDogIconHome"]?>" class="head-logo" id="head-logo-black"/>
    <img src="<?php echo $home["travelDogIconHome_white"]?>" class="head-logo" id="head-logo-white"/>
    <img src="<?php echo $home["downarrow"]?>" id="head-arrow"/>
    <script>head_logo_display()</script>
</div>
<div id="welcome">
    <p>asdadada</p>
</div>

</body>
</html>