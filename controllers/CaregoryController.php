<?php
class CategoryController extends BaseController{
    function index(){
        return $this->view(['arr' => NULL], 'category/index');
    }
}