<!doctype html>
<?php include "Base_Donnée.php" ?>
<?php include '../header.php'; ?>
<h1>NOS STICKERS</h1>
<?php foreach ($sticker as $stick => $nom) : ?>
    <div class=autocolant>
        <p><?= $nom ?></p>
        <img src="../../Public/images/<?= ($nom) ?>">
    </div>
<?php endforeach ?>

<?php include '../footer.php'; ?>