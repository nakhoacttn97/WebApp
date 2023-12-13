<?php
namespace models;

class Category extends Db{
    function getCategories(){
        $sql = "SELECT * FROM Category";
        return $this->getAll($sql);
    }

    function treeCategory(){
        $arr = $this->getCategories();
        
        $parents = [];
        $children = [];

        foreach($arr as $v){
            $cat = new Category($v['CategoryId'], $v['CategoryName']);
        
            $children[$k] = $cat;

            if($v['ParentId'] == NULL){
                $parents[$v['CategoryId']] = $cat;

            }else{
                $k = $v['ParentId'];
                if(!isset($children[$k]['children'])){
                    $children[$k]['children'] = [];
                }
                $children[$k][] = $cat;
            }
        }
        var_dump($parents);
        var_dump($children);
    }
}