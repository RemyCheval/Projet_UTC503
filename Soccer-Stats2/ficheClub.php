<?php
include("include/bdd.php");
include("include/header.php");



if(isset($_GET['id'])) {
$idArt = $_GET['id'];



$sqlArticles = "SELECT MIN(idClub) AS mini, MAX(idClub) AS maxi FROM club;";



$reqArticles=$conn->query($sqlArticles);



$nbArt = $reqArticles->fetch();
$miniArt = $nbArt['mini'];
$maxiArt = $nbArt['maxi'];



if($idArt < $miniArt || $idArt > $maxiArt) {
header("Location: index.php");
Exit();
}
else {
$articles = $conn->query("SELECT * FROM club WHERE idClub = $idArt;");



$a = $articles->fetch();
}
}
else {
header("Location: index.php");
Exit();
}
?>
<style type="text/css">



.tableau{
width: 70%;
margin: auto;
}



.content-table{
width: 100%;
border-collapse: collapse;
margin: 25px 0;
font-size: 1.5em;
min-width: 400px;
border-radius: 5px 5px 0 0;
overflow: hidden;
box-shadow: 0 0 20px rgba(0, 0, 0.15);
}



.content-table thead tr{
background-color: #58738E;
color: #FFF;
text-align: left;
font-weight: bold;
}



.content-table th
.content-table td{
padding: 12px 15px;
}



.content-table tbody tr{
border-bottom: 1px solid #dddddd;
}



.content-table tbody tr:nth-of-type(even){
background-color: #f3f3f3;
}



.content-table tbody tr:last-of-type{
border-bottom: 2px solid #58738E;
}



.content-table tbody tr:active-row{
font-weight: bold;
color: #58738E;
}



</style>
<section class="home-section">
<div style="width: 70%; margin:auto; text-align:center;">
<br>
<table class="content-table">
<thead>
<tr style="text-align:center;">
<th>Equipe</th>
<th>MJ</th>
<th>G</th>
<th>N</th>
<th>P</th>
<th>Buts</th>
<th>Points</th>
</tr>
</thead>
<tbody>
<tr class="active-row">
<td><?php echo $a['nomClub']; ?></td>
<td><?php echo $a['matchJoues']; ?></td>
<td><?php echo $a['victoire']; ?></td>
<td><?php echo $a['nul']; ?></td>
<td><?php echo $a['defaite']; ?></td>
<td><?php echo $a['buts']; ?></td>
<td><?php echo $a['points']; ?></td>
</tr>
</tbody>
</table>
</div>



<div style="width: 70%; margin:auto;">
<br>
<h2 style="text-align:center;">Joueur du club</h2>
<br>
<br>
<div>
<?php
$aze = $conn->query("SELECT * FROM club INNER JOIN joueur ON club.idClub = joueur.idClub WHERE joueur.idClub = $idArt;");


while($a = $aze->fetch()) {
?>
<h3 style="text-align:center;">
<p style="color:black; text-decoration: none;"><?php echo $a['nomJoueur']; ?>&nbsp&nbsp<?php echo $a['prenomJoueur']; ?>&nbsp| Poste : <?php echo $a['poste']; ?>&nbsp| Club : <?php echo $a['nomClub']; ?></p>
</h3>
<br>
<?php
}
?>
</div>
<br>
</div>
</section>