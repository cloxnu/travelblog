<?php
    if (empty($_GET["art"])) {
        require_once('home.php');
    }
    else {
        require_once('art.html');
    }
