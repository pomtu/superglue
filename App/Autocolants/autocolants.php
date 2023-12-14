<!doctype html>
<?php include "Base_Donnée.php"?>
<head>
    <link rel="stylesheet" href="../../Public/site.css">
</head>

<body>
    <header id="haut">
        <a href="../l'equipe/equipe.php" class="lien" id="eq">L'équipe</a>
        <a href="" class="lien">Nos actions</a>
        <a href="../accueuil/site.php" class="lien"><img src="../../Public/images/logo_superpglue_inchala.webp"></a>
        <a href="../Autocolants/autocolants.php" class="lien">Nos stickers</a>
        <a href="" class="lien" id="st">Nous soutenir</a>
    </header>
    <h1>NOS STICKERS</h1>
    <?php foreach ($sticker as $stick => $nom) : ?>
        <div class=autocolant>
            <p><?=$nom ?></p>
            <img src="../../Public/images/<?=($nom) ?>">
        </div>
    <?php endforeach ?>