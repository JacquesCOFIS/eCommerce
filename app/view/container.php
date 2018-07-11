<?php

$action = ucfirst(getParam('action'));
$contain = '';

//Appliquer une class
if($action){
    include CONTROLLER.'/'.$action.'.php';
     $object= new $action();
    $function = getParam('type');
    $contain = $object->$function();
}

$container = '<div id="container">'.$contain.'</div>';

return $container;