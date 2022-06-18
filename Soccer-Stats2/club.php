<?php 
  include("include/header.php");

?>
<style type="text/css">

  .grille {
    max-width: 1300px;
    width: 80%;
    height: auto;
    margin: 30px auto;
    /* border: 1px solid #333; */
    display: grid;
    grid-template-columns: repeat(auto-fill, 300px);
    justify-content: center;
    grid-gap: 10px;
}
.grid-item {
    width: 300px;
    height: 200px;
    background: #333;
}
</style>
<section class="home-section">
  <br>
    <div class="wrapper">
    <div class="container">
      <form method="GET" action="club.php" >
        <div class="search_wrap search_wrap_3">
            <div class="search_box">
                <input type="text" name="maRecherche" class="input" placeholder="Rechercher un club">
                <button class="btn btn_common" type="submit" id="subRech" name="subRech">
                <i class="fas fa-search"></i></button>
            </div>
        </div>  
      </form>
    </div>
</div>
<a href="ajoutChampionnat.php"><h4 style="text-align: center;">Ajouter un Championnat</h4></a><br>
<br>
<?php 

//
$messagesParPage = 18; //Nb de messages par pages.

$retour_total = $conn->query('SELECT COUNT(*) AS total FROM club'); 
$donnees_total = $retour_total->fetch();
$total = $donnees_total['total'];
 
//Compter le nombre de pages :
$nombreDePages = ceil($total/$messagesParPage);
 
if(isset($_GET['page'])) {
    $pageActuelle = intval($_GET['page']);
 
    if($pageActuelle > $nombreDePages) {
        $pageActuelle = $nombreDePages;
        }
        if($pageActuelle < 1) {
        $pageActuelle = 1;
    }
}
else {
    $pageActuelle=1;
}

$premiereEntree = ($pageActuelle - 1) * $messagesParPage; // Calcul de la 1ère entrée

 
// Affichage des Articles :
$retour_articles=$conn->query("SELECT * FROM club");




//
if(isset($_GET['maRecherche'])) {
        $Recherche = '%' . $_GET['maRecherche'] . '%';
        
        $pageActuelleR=1;

        $premiereEntreeR = ($pageActuelleR - 1) * $messagesParPage; // Calcul de la 1ère entrée
        
        // Affichage des Articles :
        $retour_articles=$conn->query("SELECT * FROM club WHERE (nomClub LIKE '$Recherche') ORDER BY nomClub DESC, idClub DESC LIMIT $premiereEntreeR, $messagesParPage;");
        
        
        $nbArtFound = $retour_articles -> rowCount();

        if($_GET['maRecherche'] == " " || $_GET['maRecherche'] == "  ") {
                echo "<h3> Désolé aucun Joueur n'a été trouvé à ce sujet... </h3>";
        }
        else {
                if($nbArtFound == 0) {
                        echo "<h3 style='text-align:center; color: var(--black); font-size: 2em;'> Désolé aucun club ne corespond à la recherche</h3>";
                }
                else {
                        echo'<h3 style="text-align:center; color: var(--black); font-size: 2em;"> Résulat de la recherche </h3><br><br>';
                        while($a = $retour_articles->fetch()) {
                        ?>
  <a href="ficheClub.php?id=<?php echo $a['idClub']; ?>">
    <div>
      <h3 style="text-align:center;">
        <p style="color:black;"><?php echo $a['nomClub']; ?></p>
      </h3>
    </div>
  </a>
  <br>

<?php 
                        }
                }
        }
}
?> 

<?php
 
while($a = $retour_articles->fetch()) {
?> 
  <a href="ficheClub.php?id=<?php echo $a['idClub']; ?>">
    <div>
      <h3 style="text-align:center;">
        <p style="color:black; text-decoration: none;"><?php echo $a['nomClub']; ?></p>
      </h3>
    </div>
  </a>
  <br>
<?php 
}
?>  
      <a href="ajoutClub.php">
        <div class="azer">
        <button>
          <span>Ajouter un Club</span>
        </button>
        </div>
      </a>
      <br>

</section>

<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>


