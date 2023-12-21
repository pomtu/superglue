<!doctype html>
<?php include "Base_Donnée_autocolant.php" ?>
<?php include '../header.php'; ?>
<h1>NOS STICKERS</h1>
<?php foreach ($sticker as $stick => $autocollant) : ?>
    <div class="vente"> 
        <div class=autocolant>
            <p><?= $autocollant['nom'] ?></p>
            <p><?= $autocollant['description']?></p>
        </div>
        <img src="../../Public/images/<?= ($nom) ?>" class="stickers">
    </div>
<?php endforeach ?>

<?php include '../footer.php'; ?>