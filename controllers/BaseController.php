<?php
abstract class BaseController{
    protected string $layout = 'layout';
    protected string $title = 'Store';
    protected array $data;
    protected string $viewName;
    
    protected function view(array $data = [], string $name = NULL){
        //extract($data);
        //require_once("views/$name.php");
        $this->data = $data;
        $this->viewName = $name;
        require_once("views/shared/{$this->layout}.php");
    }

    protected function render(){
        if($this->data != NULL && count($this->data) > 0){
            extract($this->data);
        }
        require_once("views/{$this->viewName}.php");
    }
}

// default / => view home/index
// /category => view category/index
// /home/category => view home/category