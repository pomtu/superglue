<!doctype html>

<?php include '../Common/header.php'; ?>
<img src="../../../Public/images/grp.JPG" id="grp">
<title>L'Equipe</title>
<h1>L'EQUIPE</h1>

<?php
include 'database_php_trombi.php';
?>
<div id=trombi>
  <?php foreach ($legroupe as $membre) : ?>

    <div class="carte">
      <a class="fiche"href="Page<?= $membre['firstname'] ?>.php">
        <?php
        if (isset($membre['photo'])) {
          $photo = 'photo' . $membre['photo'];
        } else {
          $photo = 'defaut.webp';
        }
        ?>
        <figure class="photo"><img class="identité" src="../../../Public//images/<?= $membre['photo'] ?>">
        </figure>
        <div class="infos">
          <p class="nom"><?= $membre['firstname'] ?> <?= $membre['lastname'] ?></p>
          <p class="description"><?= $membre['description']?></p>
        </div>
      </a>
    </div>


  <?php endforeach ?>
</div>
<p id="merci">Merci à tous nos amis scintillants, qui nous ont aidé ! Raphael, Liza, Eulalie.</p>
<?php include '../Common/footer.php'; ?>