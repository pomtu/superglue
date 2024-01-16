<!DOCTYPE html>
<?php include "BaseDoneeEquipe.php" ?>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> <?= $legroupe[3]["nom"] ?></title>
<?php include 'equipe_header.php'; ?>
<link rel="stylesheet" href="pagep.css" />
<link rel="stylesheet" href="Valentin.css" />
<?php $personne=$legroupe[3] ?>


<div class="top">
    <img src="../../../Public/images/<?= $personne["photo"] ?>" id="photo_equipe">
    <h3> <?= $personne["nom"] ?></h3>
</div>
<div class="un">
    <p> Qui suis-je ?</p>

    <ul>
        <li>-<?= $personne["role"] ?> </li>
        <li>-<?= $personne["age"] ?>ans </li>
        <li> -Première année de BUT MMI</li>
    </ul>
</div>
<div class="deux">
    <p> Description</p>
    <p><?= $personne["description"] ?></p>
</div>
<div class="trois">
    <p> J'aime</p>
    <p><?= $personne["aime"] ?></p>
</div>

<?php include '../Common/footer.php'; ?>