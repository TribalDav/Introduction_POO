<?php 
require 'partials/header.php';
?>

<div class="row">
<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="<?php echo $character->getPicture() ?>" class="img-fluid rounded-start" alt="personnage du jeu Final Fantasy 13">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo $character->getName()  ?></h5>
        <p class="card-text">Points de vie : <?php echo $character->getHp() ?></p>
        <p class="card-text"><small class="text-muted">Points d'attaque : <?php echo $character->getAtk() ?></small></p>
        <p class="card-text">Dans Final Fantasy XIII, les relations entre les différents protagonistes semblent avoir une place très importante dans le jeu. Chaque personnage est relié plus ou moins à un autre, par un événement ou par un lien de parenté. Les tensions seront donc un des cœurs de l'histoire. Enfin, chaque personnage est un L'Cie et risque donc de disparaître à jamais</p>
      </div>
    </div>
  </div>
  </div>
</div>

<?php
require 'partials/footer.php';
?>