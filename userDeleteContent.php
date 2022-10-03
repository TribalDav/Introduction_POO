<?php

require 'model/users/user.php';
require 'model/manager/UserManager.php';


if(isset($_SESSION['user'])&& !empty($_SESSION['user'])){
     /*var_dump($_SESSION['user']); */
        $user = $_SESSION['user'];
        if(isset($_POST) && !empty($_POST)){
            /* var_dump($_POST); */
            $name = $_POST['name']; 
           
            
        }else{
            echo "Vous devez être connecté pour supprimer un personnage";
        }
    }
    
    
    require 'views/userAddContentView.php';