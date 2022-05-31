<?php
require 'model/entities/Character.php';
require 'model/entities/Wizard.php';
require 'model/manager/CharacterManager.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    $character = CharacterManager::getCharacterById($id);
}


require 'views/singleView.php';