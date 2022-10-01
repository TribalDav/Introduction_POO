<?php

require 'model/entities/Character.php';
// require 'model/entities/Wizard.php';
require 'model/manager/CharacterManager.php';


                                            /*   Test de la classe Character début de l'exercice  */

/*$harry = new Character("Harry", 200, 30);
var_dump($harry);
$drago = new Character("Drago", 100, 15);
var_dump($drago);
$harry->autoAttack($drago);
var_dump($drago);
echo $harry;

$hermione = new Wizard("Hermione", 175, 50);
var_dump($hermione);
*/


$characters = CharacterManager::getAllCharacters();
// var_dump($characters);


require 'views/indexView.php';


