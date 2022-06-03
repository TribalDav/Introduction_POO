<?php 
require 'partials/header.php';
?>

<h2>Identification membre</h2>
<div class="container">
<form action="" method="post">
    <div>
        <label for="pseudo">Pseudo :</label>
        <input id="pseudo" name="pseudo" type="text">
    </div>
    <div>
        <label for="password">Password :</label>
        <input id="password" name="password" type="password">
    </div>
    <input type="submit" value="Sign In">
</form>
</div>


<?php 
require 'partials/footer.php';
?>

