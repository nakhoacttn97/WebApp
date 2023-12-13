<?php
namespace controllers;

class CategoryController extends BaseController{
    private $cat;   // do linux

    function __construct(){
        $this->cat = new models/Category();
    }
    
    function index(){
        //return $this->view(['arr' => 'Hello'], 'category/index');
        
        return $this->view(['arr' => $cat->getCategories()], 'category/index');
        
        // Ky vong
        //return $this->view(['arr' => $cat->getCategories()]);

    }
}