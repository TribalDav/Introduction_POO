<?php 
require 'partials/header.php';
?>

<h2>Inscription à l'espace membre</h2>
<div class="container">
<form action="" method="post">
<div>
        <label for="name"> Nom :</label>
        <input id="name" name="name" type="text" class="form-control">
    </div>
    <div>
        <label for="pseudo"> Pseudo :</label>
        <input id="pseudo" name="pseudo" type="text" class="form-control">
    </div>
    <div>
        <label for="email">Email :</label>
        <input id="email" name="email" type="email" class="form-control">
    </div>
    <div>
    <label for="password">Mot de passe :</label>
    <input id="password" name="password" type="password" class="form-control">
    </div>
    <input type="submit" value="Sign up">
</form>
</div>



<?php 
require 'partials/footer.php';
?>
