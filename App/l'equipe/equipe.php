<!doctype html>

<?php include '../header.php'; ?>
<img src="../../Public/images/grp.JPG" id="grp">
<h1>L'EQUIPE</h1>

<?php
include 'database_php_trombi.php';
?>
<div id=trombi>
  <?php foreach ($legroupe as $membre) : ?>

    <div class="carte">
      <a href="fiche.php">
        <?php
        if (isset($membre['photo'])) {
          $photo = 'photo' . $membre['photo'];
        } else {
          $photo = 'defaut.webp';
        }
        ?>
        <figure class="photo"><img src="../../Public/images/<?= $membre['photo'] ?>">
        </figure>
        <div class="infos">
          <p class="nom"><?= $membre['firstname'] ?> <span><?= $membre['lastname'] ?></span></p>
        </div>
      </a>
    </div>


  <?php endforeach ?>
</div>
<p id="merci">Merci à tous nos amis scintillant, qui nous ont aidé ! Raphael, Liza, Eulalie.</p>
<?php include '../footer.php'; ?>