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
    <meta name="description" content="Sidney Liu (cloxnu) 's travel blog">
    <meta name="keywords" content="Sidney Liu,cloxnu,travel,travel&life">

    <?php require_once "read/res.php";?>
    <style><?php require_once "css/font.css.php"?></style>
    <script src="read/res.js"></script>
    <script src="js/darkmode.js"></script>
    <script src="js/loading.js"></script>
    <script src="js/read.js"></script>
    <script src="js/home.js"></script>
    <link rel="stylesheet" type="text/css" href="css/darkmode.css"/>
    <link rel="stylesheet" type="text/css" href="css/loading.css"/>
    <link rel="stylesheet" type="text/css" href="css/button.css"/>
    <link rel="stylesheet" type="text/css" href="css/home.css"/>
    <link rel="stylesheet" type="text/css" href="css/cover.css"/>
    <link rel="stylesheet" type="text/css" href="css/foot.css"/>
</head>

<body class="loading touch">
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
    <div id="welcome-planet1-div">
        <img src="<?php home("planet1_shadow");?>" id="welcome-planet1-shadow"/>
        <img src="<?php home("planet1");?>" id="welcome-planet1"/>
    </div>
    <div id="welcome-planet2-div">
        <img src="<?php home("planet2_shadow");?>" id="welcome-planet2-shadow"/>
        <img src="<?php home("planet2");?>" id="welcome-planet2"/>
    </div>

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

    <a id="about-me-a" class="button-link touch" href="https://github.com/cloxnu">
        <p class="western">ABOUT ME</p>
    </a>
</div>
<div id="top-div" class="cover-style-1 dark-mode-on" style="display: none">
    <img src="" id="top-cover" class="cover-image"/>
    <span id="top-shelter" class="cover-shelter"></span>
    <p id="top-date" class="cover-date"></p>
    <div id="top-text" class="cover-text">
        <div class="cover-text-1">
            <a id="top-title" class="cover-title transition touch"></a>
            <p id="top-class" class="cover-class"></p>
        </div>
        <div class="cover-text-2">
            <a id="top-desc" class="cover-desc transition"></a>
            <a id="top-link" class="cover-link transition">EXPLORE
                <img src="<?php home("arrow_right");?>" id="top-link-img" class="cover-link-img"/>
            </a>
        </div>
    </div>
</div>
<div id="class-div">
    <a id="class-btn-all" class="button-link touch class-btn active" onclick="class_btn_clicked('all')">
        <p class="western">ALL</p>
    </a>
    <a id="class-btn-travel" class="button-link touch class-btn" onclick="class_btn_clicked('travel')">
        <p class="western">TRAVEL</p>
    </a>
    <a id="class-btn-life" class="button-link touch class-btn" onclick="class_btn_clicked('life')">
        <p class="western">LIFE</p>
    </a>
    <a id="class-btn-inspiration" class="button-link touch class-btn" onclick="class_btn_clicked('inspiration')">
        <p class="western">INSPIRATION</p>
    </a>
</div>
<div id="layout-div">
    <a id="layout-btn-grid" class="img-button-link touch layout-btn active" onclick="layout_btn_clicked('grid')">
        <img src="<?php home("layout_button_fill");?>" class="active-img"/>
        <img src="<?php home("layout_button");?>" class="inactive-img"/>
        <img src="<?php home("grid");?>" class="foreground-img"/>
        <span class="btn-shelter"></span>
    </a>
    <a id="layout-btn-list" class="img-button-link touch layout-btn" onclick="layout_btn_clicked('list')">
        <img src="<?php home("layout_button_fill");?>" class="active-img"/>
        <img src="<?php home("layout_button");?>" class="inactive-img"/>
        <img src="<?php home("list");?>" class="foreground-img"/>
        <span class="btn-shelter"></span>
    </a>
</div>
<div id="blog-div" style="display: none"></div>

<?php include_once "template/foot.php"?>

</body>

<script src="js/generate_blog_html.js"></script>
<script src="js/home_foot.js"></script>
<script src="js/loading_transition.js"></script>
<script src="js/touch.js"></script>
<?php include_once "template/firebase.php"?>
</html>