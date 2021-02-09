<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ) {
    $racine="..";
}
?>
<body>
    <div class="box">
        <div class="box_entete">
            <div class="box_information">
                <a href="./?action=help"><i class="fas fa-question"></i></a>
            </div>
            <div class="box_titre">
                <h1 >Générateur d'Habbo's</h1>
            </div>
        </div>
        <div class="box_resultat box_body">
            <div class="box_form box_image">
                <?php echo "<img src=".$resultat." alt=".$pseudo."/>";?>
            </div>
            <h2><?php echo $pseudo ?></h2>
            <div class="box_form box_lien">
                <label class="alignement" for="lien">Lien de l'avatar :</label>
                <?php echo '<input type="text" name="resultat" id="lien" value="'.$resultat.'">';?>
            </div>
        </div>
        <div class="box_btn">
            <a href="./index.php"><input class="btn_envoyer" type="submit" value="Recommencer"></a>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/960726704c.js" crossorigin="anonymous"></script>
</body>

