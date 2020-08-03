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
    <?php include "read/res.php";?>
    <style><?php include "css/font.css.php"?></style>
</head>

<body class>
<script>document.body.classList += dark_mode_class_name;</script>

<div id="dark-mode-div">
    <label id="dark-mode-label">
        <input type="checkbox" id="dark-mode-input" onclick="dark_mode_clicked()">
        <img id="dark-mode-sun-img" class="dark-mode-img black-foreground" src="<?php echo $home["sun"]?>"/>
        <img id="dark-mode-moon-img" class="dark-mode-img white-foreground" src="<?php echo $home["moon"]?>"/>
    </label>
</div>
<div id="head">
    <div id="bg-video">
        <video autoplay muted playsinline poster="<?php echo $home["head_video2_poster"]?>" id="head1">
            <source src="<?php echo $home["head_video2"]?>" type="video/mp4">
        </video>
    </div>
    <div id="bg-interact"></div>
    <div id="head-shelter" class="black-shelter"></div>
    <img src="<?php echo $home["travelDogIconHome"]?>" class="head-logo black-foreground"/>
    <img src="<?php echo $home["travelDogIconHome_white"]?>" class="head-logo white-foreground"/>
    <img src="<?php echo $home["downarrow"]?>" id="head-arrow"/>
</div>
<div id="welcome">
    <p id="welcome-p">
        你好，<br/>
        窗外的大自然。<br/>
        我满怀热爱，<br/>
        期待在你的怀抱里，<br/>
        邂逅美好且浪漫的故事。<br/>
        这里始终秉承着对艺术的执念，<br/>
        和对灵感的敬畏，<br/>
        记录着，<br/>
        这个奇妙的世界。<br/><br/>
        探索中...
    </p>
    <a id="about-me-a" href="https://github.com/cloxnu">
        <p>ABOUT ME</p>
    </a>
</div>

</body>
</html>