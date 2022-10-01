<?php 
require 'partials/header.php';
?>

<?php         // problème à résoudre concernant l'enregistrement de nouveaux personnages dans la BDD    ?>



<div class="container">
<h2>Ajout d'un personnage</h2>
    <form action="userAddContent.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Nom du personnage</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nom du personnage">
        </div>
        <div class="form-group">
            <label for="hp">Points de vie</label>
            <input type="number" class="form-control" id="hp" name="hp" placeholder="Points de vie">
        </div>
        <div class="form-group">
            <label for="atk">Points d'attaque</label>
            <input type="number" class="form-control" id="atk" name="atk" placeholder="Points d'attaque">
        </div>
        <div class="form-group">
            <label for="image">Image du personnage</label>
            <input type="file" class="form-control" id="image" name="image" placeholder="Image du personnage">
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>



<?php 
require 'partials/footer.php';
?>