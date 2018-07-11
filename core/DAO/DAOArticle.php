<?php

namespace core\dao {
    include_once BASE_PATH.'/core/DAO/DAO.php';
    class DAOArticle implements  DAO {

        private static $connection;
        private $table = 'article';
        private $errorProcess = false;

        public function __construct()
        {
            if (empty(self::$connection)) {
                self::$connection = eco_connect();
            }
        }

        public function create($articleInfo){
            $parameter = '';
            foreach($this->articleParamater as $key){
                if(!isset($articleInfo[$key])){
                    $this->errorProcess = true;
                }else{
                    $parameter .= "'".$articleInfo[$key]."',";
                }
            }
            if($this->errorProcess){
                return false;
            }else{
                $parameter = substr($parameter,0,strlen($parameter)-1);
                $query = 'INSERT INTO '.$this->table.' (description, price, link, quantity) VALUES ('.$parameter.')';
                $prepare = self::$connection ->prepare($query);
                return $prepare->execute();
            }
        }

        public function get($idArticle = null){
            $query = null;
            if($idArticle){
                $var = (int)$idArticle;
                if($var != 0){
                    $query = "SELECT * FROM ".$this->table." WHERE id='".$idArticle."'";
                }
            }else{
                $query = "SELECT * FROM ".$this->table;
            }
            if($query){
                $prepare = self::$connection->prepare($query);
                if($prepare->execute()){
                    return $prepare->fetchAll(\PDO::FETCH_ASSOC);
                }else{
                    return false;
                }
            }
        }

        public function update($articleInfo){
            if($articleInfo['id']){
                foreach($articleInfo as $value){
                    if(!isset($articleInfo[$value])){
                        $this->errorProcess = true;
                    }
                }
                if($this->errorProcess){
                    return false;
                }else{
                    $query = "UPDATE ".$this->table." SET description='".$articleInfo['description'] ."',price='".$articleInfo['price'] ."', link='".$articleInfo['link'] ."', quantity='".$articleInfo['quantity'] ."' WHERE id=".$articleInfo['id'] ."";
                    $prepare = self::$connection ->prepare($query);
                    return $prepare->execute();
                }
            }
        }

        public function delete($idArticle){
            if ($idArticle['id']) {
                $query = "delete from".$this->table." where id = '" . $idArticle['id'] . "'";
                $prepare = self::$connection->prepare($query);
                return $prepare->execute();
            }
        }

    }
}