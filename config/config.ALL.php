<?php

// Init base path
define('ROOT'                   ,'/eCommerce');
define('BASE_PATH'              ,'.');

// Init part
define('APP_PATH'               ,BASE_PATH.'/app');
define('CONFIG_PATH'            ,BASE_PATH.'/config');

// MVC access
define('MODELE'                 ,APP_PATH.'/modele');
define('CONTROLLER'             ,APP_PATH.'/controller');
define('VIEW'                   ,APP_PATH.'/view');
define('PUBLIC'                 ,APP_PATH.'/public');

// Modele access
define('MODELE_MODULE'          ,MODELE.'/module');

// Connection parameter for database
define('HOST'                   ,'127.0.0.1');
define('DB_NAME'                ,'ecommerce');
define('DB_USERNAME'            ,'root');
define('DB_PWD'                 ,'');

// Public Access
define('PUBLIC_PATH'            ,APP_PATH.'/public');
define('IMAGE'                  ,PUBLIC_PATH.'/images');
define('CSS'                    ,PUBLIC_PATH.'/css');
