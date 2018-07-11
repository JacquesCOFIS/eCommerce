<?php

include MODELE.'/ModuleArticle.php';
class Article{
    private static $objectDB;

    public function getAllArticle(){
        $allArticle = ModuleArticle::getAllArticle();

        $lesArticles = '';

        foreach ($allArticle as $item){
            $lesArticles .= '<form>
                <p>'.$item['Description'].'</p>
                <img src="'.PUBLIC_PATH.'/'.$item['link'].'"/>
                
            </form>';
        }
        return $lesArticles;
    }

    private function getObjectDB(){
        if(empty(self::$objectDB)){
            self::$objectDB = new ModuleArticle();
        }
        return self::$objectDB;
    }
}