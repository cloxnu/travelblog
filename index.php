<?php
    if (empty($_GET["art"])) {
        include_once('home.php');
    }
    else {
        include_once('art.html');
    }
