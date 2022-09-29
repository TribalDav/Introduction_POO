<?php
require 'model/entities/Character.php';
require 'model/entities/Wizard.php';
require 'model/manager/CharacterManager.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    $character = CharacterManager::getCharacterById($id);
    if($character){
        require './views/singleView.php';
    }else{
        header('location:index.php?status=danger&message="aucun personnage ne correspond à cet identifiant"');
    }
}


