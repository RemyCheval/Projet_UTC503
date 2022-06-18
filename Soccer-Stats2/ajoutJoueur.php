<?php 
  include("include/header.php");

  if(isset($_POST['upload'])){   

  $nomJoueur = $_POST['nomJoueur'];
  $prenomJoueur = $_POST['prenomJoueur'];
  $idClub =$_POST['idClub'];
  $poste = $_POST['poste'];
  $matchJoues = $_POST['matchJoues'];
  $but = $_POST['but'];
  $passD = $_POST['passD'];

    // Requête mysql pour insérer des données
  $sql = "INSERT INTO `joueur`(`nomJoueur`, `prenomJoueur`, `idClub` , `poste` , `matchJoues` , `but` , `passD`) VALUES (:nomJoueur,:prenomJoueur,:idClub,:poste,:matchJoues,:but,:passD)";
  $res = $conn->prepare($sql);
  $exec = $res->execute(array(":nomJoueur"=>$nomJoueur,":prenomJoueur"=>$prenomJoueur, ":idClub"=>$idClub, ":poste"=>$poste, ":matchJoues"=>$matchJoues, ":but"=>$but, ":passD"=>$passD));

  // vérifier si la requête d'insertion a réussi
      if($exec){
        echo '<div><br><h4 style="color: green; text-align:center;">Le joueur à bien été ajouté</h4><br>
            </div>';
      }else{
        echo '<div><br><h4 style="color: red; text-align:center;">Le joueur rencontre un problème</h4><br>
            </div>';
      }
    }
?>
<section class="home-section">
    <br>
    <div class="vv">
        <div class="forms">
            <div class="form login">
                <span class="title">Entrer un joueur</span>

                <form action="ajoutJoueur.php" method="POST">
                    <div class="input-field">
                        <input name="nomJoueur" type="text" placeholder="Nom" required>
                    </div>
                    <div class="input-field">
                        <input name="prenomJoueur" type="text" placeholder="Prenom" required>
                    </div>  

<?php
// Affichage des Joueurs :
$retour_articles=$conn->query("SELECT idClub, nomClub FROM club");
?>
                    <div style="text-align:center" class="input-field"><select name="idClub" required>
                            <option value="0" selected>-- Club --</option>
    
                <?php 
                while($a = $retour_articles->fetch()) {
                ?>       
                            <option value="<?php echo $a['idClub']; ?>"><?php echo $a['nomClub']; ?></option>
                            <?php
                            }
                            ?>
                          </select>
                    </div>
                    <div class="input-field">
                        <input name="poste" type="text" placeholder="Poste" required>
                    </div>
                    <div class="input-field">
                        <input name="matchJoues" type="number" placeholder="Match Jouer" required>                  
                    </div>
                     <div class="input-field">
                        <input name="but" type="number" placeholder="But" required>                  
                    </div>
                     <div class="input-field">
                        <input name="passD" type="number" placeholder="Passe décisive" required>
                    </div>
                    <div class="input-field button">
                        <input name="upload" type="submit" value="Ajouter">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br>
</div>
</section>

<script src="script.js"></script>
