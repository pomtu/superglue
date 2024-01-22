<!doctype html>
<?php include "Base_Donnée_autocollant.php" ?>
<?php include '../Common/header.php'; ?>
<title>Boutique</title>
<h1>NOS STICKERS</h1>
<?php foreach ($sticker as $stick => $autocollant) : ?>
    <div class="vente"> 
        <a href="<?= $autocollant['lien'] ?>">
        <div class=autocollant>
            <h4><?= $autocollant['nom'] ?></h4>
            <p><?= $autocollant['description']?></p>
            <p><?= $autocollant['prix']?></p>
        </div>
        </a>
        <img src="../../../Public/images/<?= ($autocollant['nom']) ?>" class="stickers" id="<?= $autocollant['id']?>">
    </div>
<?php endforeach ?>

<?php include '../Common/footer.php'; ?>