<?php
namespace controllers;

class CategoryController extends BaseController{
    private $cat = new models\Category();   // do linux
    
    function index(){
        //return $this->view(['arr' => 'Hello'], 'category/index');
        return $this->view(['arr' => $cat->getCategories()], 'category/index');
        // Ky vong
        //return $this->view(['arr' => $cat->getCategories()]);

    }
}