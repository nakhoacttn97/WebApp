<?php

// Khai niem va cach su dung namespace
// trung class 
// khi su dung autoload thi phai xac dinh duoc folder

// => namespace ban chat la folder
// class dai dien cho file

//require_once('abc/Animals.php');

use bcd\Rectangle;

//spl_autoload_register(function($class){
    //var_dump($class);
    
    // if($class == 'Animals'){
    //     require_once('abc/$class.php');
    // }else if($class == 'Shape'){
    //     require_once('bcd/$class.php');
    // }
    
//});

// tren Linux
spl_autoload_register(function($class){
    var_dump($class);

    require_once(str_replace('\\', '/', $class).".php");
    
    // if($class == 'Animals'){
    //     require_once('abc/$class.php');
    // }else if($class == 'Shape'){
    //     require_once('bcd/$class.php');
    // }
    
});

$a = new abc\Animals();

//require_once('bcd/Shape.php');

$s = new bcd\Shape();

$r = new bcd\Rectangle();

// Chu y dau \ tren linux ! hong chay duoc