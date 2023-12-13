<?php
spl_autoload_register(function($class){
    require_once("$class.php");
});

$controller = 'home';
$action = 'index';
$params = NULL;
if(isset($_GET['url'])){
    $arr = explode('/', trim($_GET['url'], '/'));
    //var_dump($arr);
    if(isset($arr[0])){
        // gan $arr[0] cho controller
        $controller = $arr[0];
        if(isset($arr[1])){
            // gan $arr[1] cho action
            $action = $arr[1];
            if(count($arr) > 2){
                $params = array_splice($arr, 2);
            }
        }
    }
}

//require

$class = "controllers/".ucfirst($controller)."Controller";  // -> ucfirst la viet Hoa chu cai dau tien

// truong hop windows thi $class = "controllers\\".ucfirst($controller)."Controller";  // -> ucfirst la viet Hoa

//var_dump($class);

$file = "$class.php";
//var_dump($file);

if(file_exists($file)){
    //require_once($file);
    $obj = new $class();
    //Miss
    if($params != NULL){
        $obj->$action(...$params);  // them dau " ... " thi se tu tac ra 2 tham so
    }else{
        $obj->$action();
    }
}else{
    header('location:/WebApp');
}
