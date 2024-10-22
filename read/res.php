<?php

//$prefix = 'https://cdn.jsdelivr.net/gh/cloxnu/an.dog@v1.0.4/';
//$prefix = '';
//
//// home
//
//$home = array(
//    "travelDogIconHome" => $prefix . "res/home/travelDogIconHome.png",
//    "travelDogIconHome_white" => $prefix . "res/home/travelDogIconHome_white.png",
//    "downarrow" => $prefix . "res/home/downarrow.svg",
//    "dog" => $prefix . "res/home/dog.svg",
//    "sun" => $prefix . "res/home/sun.svg",
//    "moon" => $prefix . "res/home/moon.svg",
//    "head_video2" => $prefix . "res/home/head3.mp4",
//    "head_video2_poster" => $prefix . "res/home/head3.jpg"
//);
//
//$font = array(
//    "FZYanSJW" => $prefix . "res/font/FZYanSJW.TTF",
//    "Kano" => $prefix . "res/font/Kano.otf",
//    "Poppins-Regular" => $prefix . "res/font/Poppins-Regular.ttf",
//    "Poppins-SemiBold" => $prefix . "res/font/Poppins-SemiBold.ttf",
//    "FiraMono-Medium" => $prefix . "res/font/FiraMono-Medium.ttf"
//);

$res = json_decode(file_get_contents("read/res.json"), true);

function prefix() {
    global $res;
    echo $res['prefix'];
}

function home($name) {
    global $res;
    echo prefix() . $res['home'][$name];
}

function art($name) {
    global $res;
    echo prefix() . $res['art'][$name];
}

function font($name) {
    global $res;
    echo prefix() . $res['font'][$name];
}

function content($name) {
    global $res;
    echo prefix() . $res['content'] . $name . "/";
}
