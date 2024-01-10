<?php include "base_donnee_footer.php" ?>
<a href="#haut"><img src="../../../Public/images/icone-fleche-gauche-noir.png" id="fleche"></a>
    <footer>
        <div id="FL">
            <p>Nous Contacter</p>
            <ul class="LiFooter">
                <li><a href="" class="TxtFooter">Nos coordonées</a></li>
                <li><a href="" class="TxtFooter">Formulaire de contacte</a></li>
            </ul>
        </div>
        <div id="FC">
            <p>Droits</p>
            <ul class="LiFooter">
                <li><a href="../Common/mentionslegales.html" class="TxtFooter">Mentions légales</a></li>
                <li><a href="" class="TxtFooter">CGV</a></li>

            </ul>
        </div>
        <div id="FR">
            <p>Nos Réseaux</p>
            <a href="<?=$reseauxsociaux['1']['lien']?>"><img src="<?=$reseauxsociaux['1']['photo'] ?>" alt="<?=$reseauxsociaux['1']['nom'] ?>"></a>
            <a href="<?=$reseauxsociaux['2']['lien']?>"><img src="<?=$reseauxsociaux['2']['photo'] ?>" alt="<?=$reseauxsociaux['2']['nom'] ?>"></a>
            <a href="<?=$reseauxsociaux['3']['lien']?>"><img src="<?=$reseauxsociaux['3']['photo'] ?>" alt="<?=$reseauxsociaux['3']['nom'] ?>"></a>
            <a href="<?=$reseauxsociaux['4']['lien']?>"><img src="<?=$reseauxsociaux['4']['photo'] ?>" alt="<?=$reseauxsociaux['4']['nom'] ?>"></a>

        </div>
    </footer>
</body>