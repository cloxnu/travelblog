<?php
    if (empty($_GET["art"])) {
        require_once('home.html');
    }
    else {
        require_once('art.html');
    }
