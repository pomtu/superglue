<?php include "base_donnee_footer.php" ?>
<a href="#haut"><img src="../../../Public/images/icone-fleche-gauche-noir.png" id="fleche"></a>
    <footer>
        <div id="FL">
            <p>Nous Contacter</p>
            <ul class="LiFooter">
                <li><a href="" class="TxtFooter">Nos coordonées</a></li>
                <li><a href="" class="TxtFooter">Formulaire de contact</a></li>
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
            <div id="Instagram">
            <?=$reseauxsociaux['1']['nom'] ?>
            <?=$reseauxsociaux['1']['lien'] ?>
            <?=$reseauxsociaux['1']['image'] ?>
            </div>
            <div id="Twitter">
            <?=$reseauxsociaux['2']['nom'] ?>
            <?=$reseauxsociaux['2']['lien'] ?>
            <?=$reseauxsociaux['2']['image'] ?>
            </div>
            <div id="Discord">
            <?=$reseauxsociaux['4']['nom'] ?>
            <?=$reseauxsociaux['4']['lien'] ?>
            <?=$reseauxsociaux['4']['image'] ?>
            </div>
            <div id="Youtube">
            <?=$reseauxsociaux['3']['nom'] ?>
            <?=$reseauxsociaux['3']['lien'] ?>
            <?=$reseauxsociaux['3']['image'] ?>
            </div>

        </div>
    </footer>
</body>