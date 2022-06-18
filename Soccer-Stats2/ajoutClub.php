<?php 
  include("include/header.php");

  if(isset($_POST['upload'])){   

  $nomClub = $_POST['nomClub'];
  $idChampionnat = $_POST['idChampionnat'];
  $matchJoues = $_POST['matchJoues'];
  $buts =$_POST['buts'];
  $victoire = $_POST['victoire'];
  $nul = $_POST['nul'];
  $defaite = $_POST['defaite'];
  $points = $_POST['points'];

    // Requête mysql pour insérer des données
  $sql = "INSERT INTO `club`(`nomClub`, `idChampionnat`, `matchJoues`, `buts` , `victoire` , `nul` , `defaite` , `points`) VALUES (:nomClub,:idChampionnat,:matchJoues,:buts,:victoire,:nul,:defaite,:points)";
  $res = $conn->prepare($sql);
  $exec = $res->execute(array(":nomClub"=>$nomClub,":idChampionnat"=>$idChampionnat, ":matchJoues"=>$matchJoues, ":buts"=>$buts, ":victoire"=>$victoire, ":nul"=>$nul, ":defaite"=>$defaite, ":points"=>$points));

  // vérifier si la requête d'insertion a réussi
      if($exec){
        echo '<div><br><h4 style="color: green; text-align:center;">Le club à bien été ajouté</h4><br>
            </div>';
      }else{
        echo '<div><br><h4 style="color: red; text-align:center;">Le club rencontre un problème</h4><br>
            </div>';
      }
    }
?>
<section class="home-section">
    <br>
    <div class="vv">
        <div class="forms">
            <div class="form login">
                <span class="title">Entrer un club</span>

                <form action="ajoutClub.php" method="POST">
                    <div class="input-field">
                        <input name="nomClub" type="text" placeholder="Nom du club" required>
                    </div>
                    <?php
// Affichage des Joueurs :
$retour_articles=$conn->query("SELECT idChampionnat, libelleChampionnat FROM championnat");
?>
                    <div style="text-align:center" class="input-field"><select name="idChampionnat" required>
                            <option value="0" selected>-- Championnat --</option>
    
                <?php 
                while($a = $retour_articles->fetch()) {
                ?>       
                            <option value="<?php echo $a['idChampionnat']; ?>"><?php echo $a['libelleChampionnat']; ?></option>
                            <?php
                            }
                            ?>
                          </select>
                    </div>
                    <div class="input-field">
                        <input name="matchJoues" type="text" placeholder="Nombre de Match Jouer" required>
                    </div>  
                    <div class="input-field">
                        <input name="buts" type="text" placeholder="Nombre de Buts" required>
                    </div> 
                    <div class="input-field">
                        <input name="victoire" type="text" placeholder="Nombre de Victoire" required>
                    </div>
                    <div class="input-field">
                        <input name="nul" type="text" placeholder="Nombre de nul" required>                  
                    </div>
                     <div class="input-field">
                        <input name="defaite" type="text" placeholder="Nombre de defaite" required>                  
                    </div>
                     <div class="input-field">
                        <input name="points" type="text" placeholder="Nombre de Points" required>
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