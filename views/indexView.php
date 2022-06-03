<?php 
require 'partials/header.php';
?>
<div class="row">
<?php foreach($characters as $character) { ?>
<div class="card mb-3" style="max-width: 540px;">

  <div class="row g-0">
    <div class="col-md-4">
      <img src="<?php echo $character->getName() ?>" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h4 class="card-title"><?php echo $character->getName() ?></h4>
        <p class="card-text">Points de vie :</p>
        <p class="card-text"><small class="text-muted">Points d'attaque :</small></p>
      </div>
    </div>
    <div class="card-action">
      <a href="single.php?id=<?php echo $character->id ?>">Lien carte personnelle</a>
    </div>
  </div>
  </div>
  <?php } ?>
</div>

<?php
require 'partials/footer.php';
?>