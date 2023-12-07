<?php
abstract class BaseController{
    protected function view(array $data, string $name){
        extract($data);
        require_once("views/$name.php");
    }
}