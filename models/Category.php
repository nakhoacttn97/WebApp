<?php
namespace models;

class Category extends Db{
    function getCategories(){
        $sql = "SELECT * FROM Category";
        return $this->getAll($sql);
    }
}