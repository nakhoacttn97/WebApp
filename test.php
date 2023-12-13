<?php
spl_autoload_register(function($class){
    //
    require_once("$class.php");
});

$cat = new models/Category();   // Linux
$arr = $cat->getCategories();

var_dump($arr);

$parent = [];
$children = [];

foreach($arr as $v){
    $cat = new models/Category($v['CategoryId'], $v['CategoryName']);   // Linux
    $children[$v['CategoryId']] = $cat;
    if($v['ParentId'] == NULL){
        $parent($v['CategoryId'] = $cat);
    }else{
        $k = $v['ParentId'];
        if(!isset($children[$k]['children'])){
            $children[$k]['children'] = [];
        }
        $children[$k]['children'][] = $v;
    }
}

var_dump($parent);
//var_dump($children);