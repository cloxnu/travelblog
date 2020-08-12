<?php

$dir = '../../content/';

if (empty($_GET["path"])) {
    $info_file_path = $dir . '/info.json';
    if (is_file($info_file_path))
        echo file_get_contents($info_file_path);
} else {
    $path = $dir . $_GET["path"];
    $info_file_path = $path . '/info.json';
    if (is_file($info_file_path))
        echo file_get_contents($info_file_path);
}
