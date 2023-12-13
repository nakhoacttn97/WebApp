<?php
namespace models;

class Db{
    private $pdo;

    // method constructor
    function __construct(){
        // Error
        $this->pdo = new \PDO('mysql:host=localhost;dbname=Store', 'root', '');
    }

    protected function getAll(string $sql, $params = null){
        $arr = null;
        if($params == null){
            $stmt = $this->pdo->query($sql);
            if($stmt){
                if($stmt->rowCount() > 0){
                    $arr = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                }
                $stmt->closeCursor();
            }
        }else{
            $stmt = $this->pdo->prepare($sql);
            if($stmt){
                $stmt->execute($params);
                if($stmt->rowCount() > 0){
                    $arr = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                }
                $stmt->closeCursor();
            }
        }
        return $arr;
    }

    // methos destrcutor
    function __destruct(){
        unset($this->pdo);
    }
}

/*
class Db dung de conect Database
*/