<?php 
  include("include/header.php");

  if(isset($_POST['upload'])){   

  $libelleChampionnat = $_POST['libelleChampionnat'];

    // Requête mysql pour insérer des données
  $sql = "INSERT INTO `championnat`(`libelleChampionnat`) VALUES (:libelleChampionnat)";
  $res = $conn->prepare($sql);
  $exec = $res->execute(array(":libelleChampionnat"=>$libelleChampionnat));

  // vérifier si la requête d'insertion a réussi
      if($exec){
        echo '<div><br><h4 style="color: green; text-align:center;">Le Championnat à bien été ajouté</h4><br>
            </div>';
      }else{
        echo '<div><br><h4 style="color: red; text-align:center;">Le Championnat rencontre un problème</h4><br>
            </div>';
      }
    }
?>
<section class="home-section">
    <br>
    <div class="vv">
        <div class="forms">
            <div class="form login">
                <span class="title">Créer un championnat</span>

                <form action="ajoutChampionnat.php" method="POST">
                    <div class="input-field">
                        <input name="libelleChampionnat" type="text" placeholder="Nom du Championnat" required>
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