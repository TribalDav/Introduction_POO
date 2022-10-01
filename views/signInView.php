<?php 
require 'partials/header.php';
?>


<div class="container">
<h2>Identification membre</h2>
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

