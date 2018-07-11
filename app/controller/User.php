<?php
class User{

    public function login(){

        if (isset($_POST['username']) && isset($_POST['password'])){
            $user = new User(-1, $_POST['username'], $_POST['password']);
            $user->authentification("index.php");
        }
    }
}
