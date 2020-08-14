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

    <?php require_once "read/res.php";?>
    <style><?php require_once "css/font.css.php"?></style>
    <script src="read/res.js"></script>
    <script src="js/vue.js"></script>
    <script src="js/darkmode.js"></script>
    <script src="js/loading.js"></script>
    <script src="js/read.js"></script>
    <script src="js/home.js"></script>
    <link rel="stylesheet" type="text/css" href="css/darkmode.css"/>
    <link rel="stylesheet" type="text/css" href="css/loading.css"/>
    <link rel="stylesheet" type="text/css" href="css/button.css"/>
    <link rel="stylesheet" type="text/css" href="css/home.css"/>
    <link rel="stylesheet" type="text/css" href="css/cover.css"/>
</head>

<body class="loading">
<script>document.body.classList.add(dark_mode_class_name);</script>

<?php include_once "template/darkmodeButton.php"?>
<?php include_once "template/loading.php"?>

<div id="head">
    <div id="bg-video">
        <video autoplay muted playsinline loop poster="<?php home("head_video2_poster")?>" id="head1">
            <source src="<?php home("head_video2")?>" type="video/mp4">
        </video>
    </div>
    <div id="bg-interact"></div>
    <div id="head-shelter" class="black-shelter"></div>
    <img src="<?php home("travelDogIconHome")?>" class="head-logo black-foreground"/>
    <img src="<?php home("travelDogIconHome_white")?>" class="head-logo white-foreground"/>
    <img src="<?php home("downarrow")?>" id="head-arrow"/>
</div>
<div id="welcome">
    <div id="welcome-p1-wrapper">
        <p class="welcome-p" id="welcome-p1">
            我旅行的时间很长，<br/>
            旅途也是很长的。<br/>
            天刚破晓，<br/>
            我就驱车起行，<br/>
            穿遍广漠的世界，<br/>
            在许多星球之上，<br/>
            留下辙痕。
        </p>
    </div>
    <div id="welcome-p2-wrapper">
        <p class="welcome-p" id="welcome-p2">
            这里始终秉承着对艺术的执念，<br/>
            和对灵感的敬畏，<br/>
            记录着，<br/>
            眼前奇妙的世界。<br/><br/>
            探索中...
        </p>
    </div>

    <a id="about-me-a" class="button-link" href="https://github.com/cloxnu">
        <p class="western">ABOUT ME</p>
    </a>
</div>
<div id="top-div" class="cover-style-1" style="display: none">
    <img src="" id="top-cover" class="cover-image"/>
    <span id="top-shelter" class="cover-shelter"></span>
    <p id="top-class" class="cover-class"></p>
    <p id="top-title" class="cover-title"></p>
    <p id="top-desc" class="cover-desc"></p>
</div>

</body>

<script src="js/home_foot.js"></script>
</html>