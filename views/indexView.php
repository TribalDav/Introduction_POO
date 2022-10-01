<?php 
require 'partials/header.php';
?>
<div class="container p-5 my-5">
  <div class="row g-2 shadow p-3 mb-5 bg-body rounded">
    <h1 class="mb-4">Les personnages</h1>
      <?php foreach($characters as $character) { ?>
        <div class="card mb-3 p-2 shadow p-3 mb-5 bg-body rounded" style="max-width: 600px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="..." class="img-fluid rounded-start" alt="personnage du jeu Final Fantasy 13">
            </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h3 class="card-title"><?php echo $character->getName() ?></h3>
                    <p class="card-text">Points de vie : <?php echo $character->getHp() ?></p>
                    <p class="card-text"><small class="text-muted">Points d'attaque : <?php echo $character->getAtk() ?></small></p>
                </div>
              </div>
            <div class="card-action">
              <a href="single.php?id=<?php echo $character->id ?>">Lien carte personnelle</a>
            </div>
          </div>
        </div>
      <?php } ?>
  </div>
</div>
<?php
require 'partials/footer.php';
?>