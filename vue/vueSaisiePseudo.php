<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
?>
    <body>
        <div class="box">
            <div class="box_entete">
                <div class="box_information">
                    <a href="./?action=aide"><i class="fas fa-question"></i></a>
                </div>
                <div class="box_titre">
                    <h1 >Générateur d'Habbo's</h1>
                </div>
            </div>

            <!-- Message d'erreur -->
            <?php
            if (isset($messageErreur)){
            echo '<span class='.'"box_erreur"'.'><i class='.'"fas fa-exclamation-triangle"'.'></i><p>'.$messageErreur.'</p></span>';
            }
            ?>

            <div class="box_body">
            <form action="./?action=generer" method="post">

            <!--Saisie pseudo-->
            <div class="box_form">
                <label class="alignement" for="pseudo">Pseudo :</label>
                <input type="text" id="pseudo" name="pseudo">
            </div>

            <!--Selection hôtel-->
            <div class="box_form">
                <label class="alignement" for="hotel">Hôtel :</label>
                <select name="hotel" id="hotel-select">
                <option value="com">International</option>
                <option value="fr">France</option>
                <option value="de">Allemagne</option>
                <option value="es">Espagne</option>
                <option value="it">Italie</option>
                <option value="nl">Pays-Bas</option>
                <option value="fi">Finlande</option>
                <option value="com.br">Brésil</option>
                <option value="com.tr">Turquie</option>
                </select>
            </div>
            <hr/>

            <!--Selection taille-->
            <div class="box_form">
                <label class="alignement" for="size">Taille :</label>
                <select name="size" id="size-select">
                <option value="n">Normal</option>
                <option value="l">Grand</option>
                <option value="s">Petit</option>
                </select>
            </div>

            <!--Selection de l'expression-->
            <div class="box_form">
                <label class="alignement" for="gesture">Expression :</label>
                <select name="gesture" id="gesture-select">
                <option value="null">Neutre</option>
                <option value="spk">Parler</option>
                <option value="sml">Sourire</option>
                <option value="sad">Triste</option>
                <option value="srp">Surpris</option>
                <option value="eyb">Endormi</option>
                <option value="agr">Fâcher</option>
                </select>
            </div>

            <!--Selection seulement tête headonly-->
            <div class="box_form">
                <label class="alignement" for="headOnly">Tête uniquement :</label>
                <select name="headOnly" id="headonly-select">
                <option value="0">Non</option>
                <option value="1">Oui</option>
                </select>
            </div>
            <hr/>

            <!--Selection de l'action-->
            <div class="box_form">
                <label class="alignement" >Action :</label>
                <select name="action" id="action-select">
                <option value="null">Debout</option>
                <option value="wlk">Marcher</option>
                <option value="sit">Assis</option>
                <option value="lay">Allonger</option>
                </select>
            </div>
            
            <!--Selection du salut-->
            <div class="box_form">
                <label>Saluer :</label></br>
                <input type="radio" name="saluer" id="N" value="null" checked="checked" />
                <label for="N">Non</label>
                <input type="radio" name="saluer" id="O" value="wav" />
                <label for="O">Oui</label>
            </div>
            
            <!--Selection de l'objet-->
            <div class="box_form">
                <label>Objet :</label></br>
                <input type="radio" name="actObjet" id="R" value="null" checked="checked" />
                <label for="R">Rien</label>
                <input type="radio" name="actObjet" id="tenir" value="crr" />
                <label for="tenir">Tenir</label>
                <input type="radio" name="actObjet" id="boire" value="drk" />
                <label for="boire">Boire</label>
                <select name="objet" id="objet-select">
                <option value="0">Rien</option>
                <option value="1">Eau</option>
                <option value="2">Carotte </option>
                <option value="3">Glace</option>
                <option value="5">Habbo Cola</option>
                <option value="6">Café</option>
                <option value="9">Potion d'amour</option>
                <option value="33">Calippo</option>
                <option value="42">Thé</option>
                <option value="43">Jus de tomate</option>
                <option value="44">Potion radioactive</option>
                <option value="667">Bubble juice de 1978</option>
                </select>
            </div>

            <hr/>

            <!--Selection de la direction de la tête-->
            <div class="box_form">
                <div class="dirTete_box">
                    <label>Direction tête :</label><br/>                    
                    <label class="dirTete_item" for="droite">
                    <img src="https://www.habbo.fr/habbo-imaging/avatarimage?user=xxvalentin87xx&gesture=sml&headonly=1&head_direction=1" alt="gauche">
                    <input type="radio" name="head_direction" id="droite" value="1" />
                    </label>
                    <label class="dirTete_item" for="bas_droite">
                    <img src="https://www.habbo.fr/habbo-imaging/avatarimage?user=xxvalentin87xx&gesture=sml&headonly=1&head_direction=2" alt="bas_droite">
                    <input type="radio" name="head_direction" id="bas_droite" value="2" checked="checked"/>
                    </label>
                    <label class="dirTete_item" for="face">
                    <img src="https://www.habbo.fr/habbo-imaging/avatarimage?user=xxvalentin87xx&gesture=sml&headonly=1&head_direction=3" alt="face">
                    <input type="radio" name="head_direction" id="face" value="3" />
                    </label>
                    <label class="dirTete_item" for="bas_gauche">
                    <img src="https://www.habbo.fr/habbo-imaging/avatarimage?user=xxvalentin87xx&gesture=sml&headonly=1&head_direction=4" alt="bas_gauche">
                    <input type="radio" name="head_direction" id="bas_gauche" value="4" />
                    </label>                    
                </div>
                <div class="box_form">
                    <label class="dirTete_item" for="gauche">
                    <img src="https://www.habbo.fr/habbo-imaging/avatarimage?user=xxvalentin87xx&gesture=sml&headonly=1&head_direction=5" alt="gauche">
                    <input type="radio" name="head_direction" id="gauche" value="5" />
                    </label>
                    <label class="dirTete_item" for="haut_gauche">
                    <img src="https://www.habbo.fr/habbo-imaging/avatarimage?user=xxvalentin87xx&gesture=sml&headonly=1&head_direction=6" alt="haut_gauche">
                    <input type="radio" name="head_direction" id="haut_gauche" value="6" />
                    </label>
                    <label class="dirTete_item" for="face_arriere">
                    <img src="https://www.habbo.fr/habbo-imaging/avatarimage?user=xxvalentin87xx&gesture=sml&headonly=1&head_direction=7" alt="face_arriere">
                    <input type="radio" name="head_direction" id="face_arriere" value="7" />
                    </label>
                    <label class="dirTete_item" for="haut_droite">
                    <img src="https://www.habbo.fr/habbo-imaging/avatarimage?user=xxvalentin87xx&gesture=sml&headonly=1&head_direction=8" alt="haut_droite">
                    <input type="radio" name="head_direction" id="haut_droite" value="8" />
                    </label>
                </div>
            </div>

            <!--Selection de la direction du corps-->
            <div class="dirCorps">
                <div class="dirCorps_box">
                    <label>Direction du corps :</label><br/>
                    <label class="dirCorps_item" for="corps_droite">
                    <img src="https://www.habbo.fr/habbo-imaging/avatarimage?user=xxvalentin87xx&gesture=sml&direction=1&head_direction=1" alt="gauche">
                    <input type="radio" name="direction" id="corps_droite" value="1" />
                    </label>
                    <label class="dirCorps_item" for="corps_bas_droite">
                    <img src="https://www.habbo.fr/habbo-imaging/avatarimage?user=xxvalentin87xx&gesture=sml&direction=2&head_direction=2" alt="bas_droite">
                    <input type="radio" name="direction" id="corps_bas_droite" value="2" checked="checked"/>
                    </label>
                    <label class="dirCorps_item" for="corps_face">
                    <img src="https://www.habbo.fr/habbo-imaging/avatarimage?user=xxvalentin87xx&gesture=sml&direction=3&head_direction=3" alt="face">
                    <input type="radio" name="direction" id="corps_face" value="3" />
                    </label>
                    <label class="dirCorps_item" for="corps_bas_gauche">
                    <img src="https://www.habbo.fr/habbo-imaging/avatarimage?user=xxvalentin87xx&gesture=sml&direction=4&head_direction=4" alt="bas_gauche">
                    <input type="radio" name="direction" id="corps_bas_gauche" value="4" />
                    </label>
                </div>
                <div class="dirTete_box">
                    <label class="dirCorps_item" for="corps_gauche">
                    <img src="https://www.habbo.fr/habbo-imaging/avatarimage?user=xxvalentin87xx&gesture=sml&direction=5&head_direction=5" alt="gauche">
                    <input type="radio" name="direction" id="corps_gauche" value="5" />
                    </label>
                    <label class="dirCorps_item" for="corps_haut_gauche">
                    <img src="https://www.habbo.fr/habbo-imaging/avatarimage?user=xxvalentin87xx&gesture=sml&direction=6&head_direction=6" alt="haut_gauche">
                    <input type="radio" name="direction" id="corps_haut_gauche" value="6" />
                    </label>
                    <label class="dirCorps_item" for="corps_face_arriere">
                    <img src="https://www.habbo.fr/habbo-imaging/avatarimage?user=xxvalentin87xx&gesture=sml&direction=7&head_direction=7" alt="face_arriere">
                    <input type="radio" name="direction" id="corps_face_arriere" value="7" />
                    </label>
                    <label class="dirCorps_item" for="corps_haut_droite">
                    <img src="https://www.habbo.fr/habbo-imaging/avatarimage?user=xxvalentin87xx&gesture=sml&direction=8&head_direction=8" alt="haut_droite">
                    <input type="radio" name="direction" id="corps_haut_droite" value="8" />
                    </label>
                </div>
            </div>

            <!--Bouton valider-->
            <div class="box_btn">
                <input class="btn_envoyer" type="submit" value="Valider" name="boutonValider">
                <input class="btn_reset" type="reset" value="Effacer">
            </div>
            </form>
            </div>
        </div>
        <script src="https://kit.fontawesome.com/960726704c.js" crossorigin="anonymous"></script>
    </body>
