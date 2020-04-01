<?php

$title = 'Rechercher';

// Test si la variables GET pour la recherche existent
if (isset($_GET['destination']) && isset($_GET['date'])) {
  array_map('trim', $_GET); // retirer les espaces de tous les éléments du tableau

  $cruises = searchCruise($_GET['destination'], $_GET['date']);
  var_dump($cruises);
}

ob_start();
?>
<h1>Résultat de la recherche</h1>
<?php if (count($cruises) > 0) : ?>
  <p>Nous avons trouvé <?= count($cruises); ?> résultat(s).</p>
<?php else : ?>
  <p>Nous n'avons pas trouvé de croisières</p>
<?php endif; ?>
<?php foreach ($cruises as $cruise) : ?>
  <div class="card mb-2">
    <div class="card-body">
      <h2><?= $cruise['name']; ?></h2>
      <div><?= date_format(date_create($cruise['date_departure']), 'd/m/Y'); ?>-<?= date_format(date_create($cruise['date_arrival']), 'd/m/Y'); ?></div>
      <div><strong>Navire : </strong> <?= $cruise['boat']; ?></div>
    </div>
  </div>
<?php endforeach; ?>
<?php
$content = ob_get_clean();

require_once '../template.php';
