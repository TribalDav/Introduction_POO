<?php

require 'model/users/user.php';
require 'model/manager/UserManager.php';

if(isset($_POST) && !empty($_POST)){
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $entering_password =  htmlspecialchars($_POST['password']);
    //etape 1 : récupérer les données de l'utilisateur
    $userInfos = UserManager::getUserInfosByPseudo($pseudo);
    //etape 2 : comparer le mot de pass saisie avec celui de la base, problème celui ci est chiffré
    $hashed_password = $userInfos['password'];
    $isConfirmed = password_verify($entering_password, $hashed_password);
    if($isConfirmed){
        session_start();
        $_SESSION['pseudo'] = $userInfos['pseudo'];
        header('location:index.php?status=success&message=Vous êtes connecté');
        ;
        
    }
}

require 'views/signInView.php';