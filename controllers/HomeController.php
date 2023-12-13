<?php
#namespace
namespace controllers;
//require_once('BaseController.php');

class HomeController extends BaseController{
    //naive
    // protected function view(array $data, string $name){
    //     // tach cac phan tu trong array thanh cac varialble rieng le
    //     extract($data);
    //     require_once("views/$name.php");
    // }


    function index(){
        //Naive
        $data = [
            ['id' => 1, 'name' => 'Laptop'],
            ['id' => 2, 'name' => 'Mose']
        ];
        //naive
        $this->view(['categories' => $data], 'home/index');
        //echo "Home index";
    }

    function category(int $id, int $p = 1){
        $row = ['id' => 1, 'name' => 'Laptop Hp'];
        return $this->view(['row' => $row], 'home/category');
    }

    function details(int $id){
        echo "Home details {$id}";
    }
}