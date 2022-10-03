<?php

require 'model/users/user.php';
require 'model/manager/UserManager.php';


if(isset($_SESSION['user'])&& !empty($_SESSION['user'])){
     /*var_dump($_SESSION['user']); */
        $user = $_SESSION['user'];
    if(isset($_POST) && !empty($_POST)){
        /* var_dump($_POST); */
        $name = $_POST['name']; 
        $hp = $_POST['hp'];
        $atk = $_POST['atk'];
        $userId = $_SESSION['user'];
        UserManager::addCharacterByUser($name, $hp, $atk, $userId);
    } else {
        echo "Vous devez être connecté pour ajouter un personnage";
    }
}


require 'views/userAddContentView.php';

