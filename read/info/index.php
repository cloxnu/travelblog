<?php

$dir = '../../content/';

if (empty($_GET["path"])) {
    $info_file_path = $dir . '/info.json';
    if (is_file($info_file_path))
        echo file_get_contents($info_file_path);
} else if (is_array($_GET["path"])) {
    $infos = [];
    foreach ($_GET["path"] as $one_path) {
        $path = $dir . $one_path;
        $info_file_path = $path . '/info.json';
        $infos[] = json_decode(file_get_contents($info_file_path));
    }
    echo json_encode($infos);
} else {
    $path = $dir . $_GET["path"];
    $info_file_path = $path . '/info.json';
    if (is_file($info_file_path))
        echo file_get_contents($info_file_path);
}
