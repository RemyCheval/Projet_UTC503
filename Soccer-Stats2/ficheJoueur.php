<?php
include("include/bdd.php");
include("include/header.php");



if(isset($_GET['id'])) {
$idArt = $_GET['id'];



$sqlArticles = "SELECT MIN(idJoueur) AS mini, MAX(idJoueur) AS maxi FROM joueur;";
$reqArticles=$conn->query($sqlArticles);



$nbArt = $reqArticles->fetch();
$miniArt = $nbArt['mini'];
$maxiArt = $nbArt['maxi'];



if($idArt < $miniArt || $idArt > $maxiArt) {
header("Location: index.php");
Exit();
}
else {
$articles = $conn->query("SELECT * FROM joueur INNER JOIN club ON club.idClub = joueur.idClub WHERE idJoueur = $idArt;");



$a = $articles->fetch();
}
}
else {
header("Location: classement.php");
Exit();
}
?>
<style type="text/css">
@import url("https://fonts.googleapis.com/css?family=Krub:400,700");
* {
margin: 0;
padding: 0;
box-sizing: border-box;
}



html, body {
width: 100%;
height: 100%;
}



body {
background: #202020;
font-family: "Krub", sans-serif;
}



.card {
position: absolute;
margin: auto;
top: 0;
right: 0;
bottom: 0;
left: 0;
width: 250px;
height: 400px;
border-radius: 10px;
box-shadow: 0 10px 25px 5px rgba(0, 0, 0, 0.2);
background: #151515;
overflow: hidden;
}
.card .ds-top {
position: absolute;
margin: auto;
top: 0;
right: 0;
left: 0;
width: 300px;
height: 80px;
background: crimson;
animation: dsTop 1.5s;
}
.card .avatar-holder {
position: absolute;
margin: auto;
top: 40px;
right: 0;
left: 0;
width: 100px;
height: 100px;
border-radius: 50%;
box-shadow: 0 0 0 5px #151515, inset 0 0 0 5px #000000, inset 0 0 0 5px #000000, inset 0 0 0 5px #000000, inset 0 0 0 5px #000000;
background: white;
overflow: hidden;
animation: mvTop 1.5s;
}
.card .avatar-holder img {
width: 100%;
height: 100%;
object-fit: cover;
}
.card .name {
position: absolute;
margin: auto;
top: -50px;
right: 0;
bottom: 0;
left: 0;
width: inherit;
height: 40px;
text-align: center;
animation: fadeIn 2s ease-in;
}
.card .name a {
color: white;
text-decoration: none;
font-weight: 700;
font-size: 18px;
}
.card .name a:hover {
text-decoration: underline;
color: crimson;
}
.card .name h6 {
position: absolute;
margin: auto;
left: 0;
right: 0;
bottom: 0;
color: white;
width: 40px;
}
.card .button {
position: absolute;
margin: auto;
padding: 8px;
top: 20px;
right: 0;
bottom: 0;
left: 0;
width: inherit;
height: 40px;
text-align: center;
animation: fadeIn 2s ease-in;
outline: none;
}
.card .button a {
padding: 5px 20px;
border-radius: 10px;
color: white;
letter-spacing: 0.05em;
text-decoration: none;
font-size: 10px;
transition: all 1s;
}
.card .button a:hover {
color: white;
background: crimson;
}
.card .ds-info {
position: absolute;
margin: auto;
top: 60px;
bottom: 0;
right: 0;
left: 0;
width: inherit;
height: 40px;
display: flex;
}
.card .ds-info .pens, .card .ds-info .projects, .card .ds-info .posts {
position: relative;
left: -300px;
width: calc(250px / 3);
text-align: center;
color: white;
animation: fadeInMove 2s;
animation-fill-mode: forwards;
}
.card .ds-info .pens h6, .card .ds-info .projects h6, .card .ds-info .posts h6 {
text-transform: uppercase;
color: crimson;
}
.card .ds-info .pens p, .card .ds-info .projects p, .card .ds-info .posts p {
font-size: 12px;
}
.card .ds-info .ds:nth-of-type(2) {
animation-delay: 0.5s;
}
.card .ds-info .ds:nth-of-type(1) {
animation-delay: 1s;
}
.card .ds-skill {
position: absolute;
margin: auto;
bottom: 27px;
right: 0;
left: 0;
width: 200px;
height: 100px;
animation: mvBottom 1.5s;
}
.card .ds-skill h6 {
margin-bottom: 10px;
font-weight: 700;
text-transform: uppercase;
color: crimson;
}
.card .ds-skill .skill h6 {
font-weight: 400;
font-size: 10px;
letter-spacing: 0.05em;
margin: 4px 0;
color: white;
}
.card .ds-skill .skill .fab {
color: crimson;
font-size: 14px;
}
.card .ds-skill .skill .bar {
height: 5px;
background: crimson;
text-align: right;
}
.card .ds-skill .skill .bar p {
color: white;
font-size: 8px;
padding-top: 5px;
animation: fadeIn 5s;
}
.card .ds-skill .skill .bar:hover {
background: white;
}
.card .ds-skill .skill .bar-html {
width: 95%;
animation: htmlSkill 1s;
animation-delay: 0.4s;
}
.card .ds-skill .skill .bar-css {
width: 90%;
animation: cssSkill 2s;
animation-delay: 0.4s;
}
.card .ds-skill .skill .bar-js {
width: 75%;
animation: jsSkill 3s;
animation-delay: 0.4s;
}



@keyframes fadeInMove {
0% {
opacity: 0;
left: -300px;
}
100% {
opacity: 1;
left: 0;
}
}
@keyframes fadeIn {
0% {
opacity: 0;
}
100% {
opacity: 1;
}
}
@keyframes htmlSkill {
0% {
width: 0;
}
100% {
width: 95%;
}
}
@keyframes cssSkill {
0% {
width: 0;
}
100% {
width: 90%;
}
}
@keyframes jsSkill {
0% {
width: 0;
}
100% {
width: 75%;
}
}
@keyframes mvBottom {
0% {
bottom: -150px;
}
100% {
bottom: 10px;
}
}
@keyframes mvTop {
0% {
top: -150px;
}
100% {
top: 40px;
}
}
@keyframes dsTop {
0% {
top: -150px;
}
100% {
top: 0;
}
}
.following {
color: white;
background: crimson;
}





</style>
<section class="home-section">
  <br>
<div class="card">
<div class="ds-top"></div>
<div class="avatar-holder">
<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1820405/profile/profile-512.jpg?1533058950" alt="Albert Einstein">
</div>
<div class="name">
<a href="#" target="_blank"><?php echo $a["nomJoueur"]." ".$a["prenomJoueur"];?></a>
</div>
<div class="ds-info">
<div class="ds pens">
<h6 title="Nombres de match joués">Matchs<i class="fas fa-edit"></i></h6>
<p><?php echo $a["matchJoues"];?></p>
</div>
<div class="ds projects">
<h6 title="Nombres de buts marqués">Buts<i class="fas fa-project-diagram"></i></h6>
<p><?php echo $a["but"];?></p>
</div>
<div class="ds posts">
<h6 title="Nombres de passes Décisives">Passe D <i class="fas fa-comments"></i></h6>
<p><?php echo $a["passD"];?></p>
</div>
</div>
<div class="ds-skill">
<h6>Informations :<i class="fa fa-code" aria-hidden="true"></i></h6>
<div class="skill html">
<h6 style="color:crimson;font-weight: bold;"><i class="ds-info"></i> Club : <p style="color:white; font-size:12px;"><?php echo $a["nomClub"];?></h6>
</div>
<div class="skill html">
<h6 style="color:crimson;font-weight: bold;"><i class="ds-info"></i>Poste : <p style="color:white; font-size:12px;"><?php echo $a["poste"];?></p></h6>
</div>
</div>
</div>
</section>