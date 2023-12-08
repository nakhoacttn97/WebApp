<?php
require_once("BaseController.php");
class CategoryController extends BaseController{
    function index(){
        return $this->view(['arr' => 'Hello'], 'category/index');
    }
}