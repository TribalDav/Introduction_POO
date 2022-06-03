<?php

require 'model/users/user.php';
require 'model/manager/UserManager.php';

if(isset($_POST) && !empty($_POST)){
    $name = htmlspecialchars($_POST['name']);
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $email = htmlspecialchars($_POST['email']);
    $password_clean = htmlspecialchars($_POST['password']);
    $hashed_password = password_hash($password_clean, PASSWORD_BCRYPT);
    
    UserManager::register($name, $pseudo, $email, $hashed_password);
 }



require 'views/signUpView.php';