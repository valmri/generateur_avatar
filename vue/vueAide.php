<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ) {
    $racine="..";
}
?>
<body>
    <div class="box">
        <div class="box_entete">
            <div class="box_information">
                <a href="index.php"><i class="fas fa-home"></i></a>
            </div>
            <div class="box_titre">
                <h1 >Générateur d'Habbo's</h1>
            </div>
        </div>
        <article>
            <h2>Comment générer un avatar ?</h2>
            <ol>
            <li>Pour commencer, vous devez entrer le pseudo de l'avatar que vous souhaitez générer.</li>
            <li>Ensuite, vous devez sélectionner l'hôtel où se situe l'avatar dans la liste déroulante.</li>
            <li>Après, libre à vous de personnaliser l'avatar.</li>
            <li>Enfin, cliquez sur le bouton "Valider" pour avoir l'image de l'avatar et son lien.</li>
            </ol>
            <hr/>
            <h2>Qu'est-ce que signifie "international" ?</h2>
            <p class="para_aide">L'hôtel international n'est pas un système automatique qui sélectionne l'hôtel où vous êtes le plus souvent présent, il s'agit seulement de Habbo.com .</p>
        </article>
        <div class="box_btn">
            <a href="./index.php"><input class="btn_envoyer" type="submit" value="Retour"></a>            
        </div>
    </div>
    <script src="https://kit.fontawesome.com/960726704c.js" crossorigin="anonymous"></script>
</body>
