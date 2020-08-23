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
<body class="loading touch">
<script>document.body.classList.add(dark_mode_class_name);</script>
<script src="js/404.js"></script>

<?php include_once "template/homeButton.php"?>
<?php include_once "template/darkmodeButton.php"?>

<div id="errordiv">
    <p id="errortext">
        404
    </p>
</div>
</body>

<script src="js/loading_transition.js"></script>
<script src="js/touch.js"></script>
</html>
