<?php

    /**
     * @param $parameter that your look for in global POST or GET
     * @param null $default if $parameter is not found
     * @return string corresponding value of parameter or default else
     */
    function getParam($parameter, $default=null){
        $return = '';
        if(isset($_POST[$parameter])){
            $return = $_POST[$parameter];
        }
        if(isset($_GET[$parameter])){
            $return = $_GET[$parameter];
        }
        if(empty($return) AND $default){
            $return = $default;
        }
        return $return;
    }

    /**
     * @return PDO To create database connection
     */
    function eco_connect(){
       $bdd = new PDO('mysql:host='.HOST.';dbname='.DB_NAME,DB_USERNAME,DB_PWD);
       return $bdd;
    }

    function listParamDAO(array $param, $dependingValue){
        return $param['paramSearch'] = $dependingValue;
    }

