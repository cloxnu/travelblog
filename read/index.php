<?php

$dir = '../content/';
$content_dir = scandir($dir, true);

if ($content_dir != false)
{
    if (empty($_GET["path"])) {
        $all_blogs = array();
        foreach ($content_dir as $blog_dir)
        {
            if (!is_dir($dir.$blog_dir) || $blog_dir === '.' || $blog_dir === '..')
            {
                continue;
            }
            $info_file_path = $dir.$blog_dir.'/info.json';
            if (!is_file($info_file_path))
                continue;
            $json_str = file_get_contents($info_file_path);

            $json = json_decode($json_str);
            $all_blogs[] = $json;
        }
        echo json_encode($all_blogs);
    }
    else {
        $path = $dir.$_GET["path"];
        if (is_file($path))
            echo file_get_contents($path);
    }
}
