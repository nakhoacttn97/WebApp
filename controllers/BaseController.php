<?php
abstract class BaseController{
    protected string $layout = 'layout';
    protected string $title = 'Store';
    protected array $data;
    protected string $viewName;

    protected function view(array $data, string $name = NULL){
        //extract($data);
        //require_once("views/$name.php");

        $this->data = $data;
        $this->viewName = $name;
        require_once("views/shared/{$this->layout}.php");
    }

    // method render
    protected function render(){
        extract($data);
        require_once("views/{$this->$name}.php");
    }
}
?>
<!-- // default / => view home/index
// /category => view category/index
// /home/category => view home/category -->