<?php
include_once BASE_PATH.'/core/DAO/DAOArticle.php';
use core\dao\DAOArticle;
class ModuleArticle{

    private $price;
    private $quantity;
    private $id;
    private $link;
    private $description;
    private static $objectDB;

    public function __construct($id,$price,$quantity,$link,$description){
        $this->price        = $price;
        $this->quantity     = $quantity;
        $this->id           = $id;
        $this->link         = $link;
        $this->description  = $description;
    }

    public function getArticleById($idArticle){
        $objectDB = self::getObjectDB();
        $typeValue = gettype($idArticle);
        if($typeValue != 'array'){
            return $objectDB->get($idArticle);
        }else{
            $result = array();
            foreach ($idArticle as $item){
                $item = $objectDB->get($item);
                $result[$item['id']] =  $item;
            }
            return $result;
        }
    }

    static public function getAllArticle(){
        return self::getObjectDB()->get();
    }


    static private function getObjectDB(){
        if(empty(self::$objectDB)){
            self::$objectDB = new DAOArticle();
        }
        return self::$objectDB;
    }
}