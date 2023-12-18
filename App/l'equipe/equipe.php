<!doctype html>

<head>
    <link rel="stylesheet" href="./site.css">
</head>

<body>
    <header id="haut">
        <a href="../l'equipe/equipe.html" class="lien" id="eq">L'équipe</a>
        <a href="" class="lien">Nos actions</a>
        <a href="../accueuil/site.html" class="lien"><img src="./images/logo_superpglue_inchala.webp"></a>
        <a href="../Autocolants/autocolants.html" class="lien">Nos stickers</a>
        <a href="" class="lien" id="st">Nous soutenir</a>
    </header>
    <img src="./images/grp.JPG" id="grp">
    <h1>L'EQUIPE</h1>

    <?php
    include 'database_php_trombi.php';
    ?>
    <?php foreach ($legroupe as $membre) : ?>

      <div class="carte">
        <a href="fiche.php">
        <?php
            if (isset($membre['photo'])) {
              $photo ='photo' . $membre['photo'];
            } else {
              $photo = 'defaut.png';
            }
            ?>
          <figure class="photo"><img src="./images/<?=$membre['photo']?>">
          </figure>
          <div class="infos">
            <p class="nom"><?= $membre['firstname'] ?> <span><?= $membre['lastname'] ?></span></p>
          
          </div>
        </a>
      </div>


    <?php endforeach ?>





    <!--
    <div id="grp_pht">
        <div class="personne">
            <img src="../images/alban.jpg">
            <p>Alban MARTIN</p>
        </div>
        <div class="personne">
            <img src="../images/alexandre.jpg">
            <p>Alexandre LEBON</p>
        </div>
        <div class="personne">
            <img src="../images/valentin.jpg">
            <p>Valentin LAGANT</p>
        </div>
        <div class="personne">
            <img src="../images/lili.jpg">
            <p>Lili-Rose BURGOS</p>
        </div>
        <div class="personne">
            <img src="../images/amina.jpg">
            <p>AminaMEGHOUFEL</p>
        </div>
        <div class="personne">
            <img src="../images/alexis.jpg">
            <p>Alexis TISON</p>
        </div>
        <div class="personne">
            <img src="../images/ahinoa.jpg">
            <p>Ahinoa RUIZ</p>
        </div>
    </div>

-->
    <p id="merci">Merci à tous nos amis scintillant, qui nous ont aidé ! Raphael, Liza, Eulalie.</p>
    <a href="#haut"><img src="./images/icone-fleche-gauche-noir.png" id="fleche"></a>
    <footer>
        <div id="FL">
            <p>Nous Contacter</p>
            <ul>
                <li><a href="">Nos actions</a></li>
                <li><a href="../l'equipe/equipe.html">L'équipe</a></li>
                <li><a href="../Autocolants/autocolants.html">Nos stickers</a></li>
            </ul>
        </div>
        <div id="FC">
            <p>Droits</p>
            <ul>
                <li><a href="../mentionslegales.html">Mentions légales</a></li>
                <li><a href="">CGV</a></li>

            </ul>
        </div>
        <div id="FR">
            <p>Nos Réseaux</p>
            <a href="https://discord.gg/jKGJEsTNAg"><img src="./images/logo-discord.png"></a>
            <a href="https://www.instagram.com/wearesuperglue_/"><img src="./images/logo-instagram.png"></a>
            <a href=""><img src="./images/logo-youtube.png"></a>
            <a href="https://twitter.com/Superglu_e"><img src="./images/logo-X.png"></a>
        </div>
    </footer>