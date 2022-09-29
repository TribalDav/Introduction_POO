<?php 

require './model/entities/Character.php';
require './model/entities/Wizard.php';

$mago = new Wizard("Gandalf", 250, 20, 200);

var_dump($mago);
?>

<h1><?php echo $mago->getName() ?></h1>
