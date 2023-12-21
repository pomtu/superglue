<!doctype html>
<?php include "Base_Donnée_autocollant.php" ?>
<?php include '../header.php'; ?>
<h1>NOS STICKERS</h1>
<?php foreach ($sticker as $stick => $autocollant) : ?>
    <div class="vente"> 
        <div class=autocollant>
            <p><?= $autocollant['nom'] ?></p>
            <p><?= $autocollant['description']?></p>
            <p><?= $autocollant['prix']?></p>
        </div>
        <img src="../../Public/images/<?= ($autocollant['nom']) ?>" class="stickers" id="<?= $autocollant['id']?>">
    </div>
<?php endforeach ?>

<?php include '../footer.php'; ?>