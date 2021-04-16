<?php
session_start();
 
$bdd = new PDO ('mysql:host=127.0.0.1; port=3308;dbname=thg','root','');
 
if(isset($_SESSION['id'])) {
   $requser = $bdd->prepare("SELECT * FROM patient WHERE id_patient = ?");
   $requser->execute(array($_SESSION['id']));
   $user = $requser->fetch();
     if(isset($_POST['Newnom']) AND !empty($_POST['Newnom']) AND $_POST['Newnom'] != $user['nom']) {
      $Newnom = htmlspecialchars($_POST['Newnom']);
      $insertnom = $bdd->prepare("UPDATE patient SET nom = ? WHERE id_patient = ?");
      $insertnom->execute(array($Newnom, $_SESSION['id']));
      header('Location: profil.php?id='.$_SESSION['id']);
   }
    if(isset($_POST['Newprenom']) AND !empty($_POST['Newprenom']) AND $_POST['Newprenom'] != $user['prenom']) {
      $Newprenom = htmlspecialchars($_POST['Newprenom']);
      $insertprenom = $bdd->prepare("UPDATE patient SET prenom = ? WHERE id_patient = ?");
      $insertprenom->execute(array($Newprenom, $_SESSION['id']));
      header('Location: profil.php?id='.$_SESSION['id']);
   }
   if(isset($_POST['Newemail']) AND !empty($_POST['Newemail']) AND $_POST['Newemail'] != $user['email']) {
      $Newemail = htmlspecialchars($_POST['Newemail']);
      $insertmail = $bdd->prepare("UPDATE patient SET email = ? WHERE id_patient = ?");
      $insertmail->execute(array($Newemail, $_SESSION['id']));
      header('Location: profil.php?id='.$_SESSION['id']);
   }
   if(isset($_POST['Newmdp']) AND !empty($_POST['Newmdp']) AND isset($_POST['Newrmdp']) AND !empty($_POST['Newrmdp'])) {
      $mdp1 = md5 ($_POST['Newmdp']);
      $mdp2 = md5 ($_POST['Newrmdp']);
      if($mdp1 == $mdp2) {
         $insertmdp = $bdd->prepare("UPDATE patient SET mdp = ? WHERE id_patient = ?");
         $insertmdp->execute(array($mdp1, $_SESSION['id']));
         header('Location: profil.php?id='.$_SESSION['id']);
      } else {
         $msg = "Vos deux mdp ne correspondent pas !";
      }
   }
    if(isset($_POST['Newnumtel']) AND !empty($_POST['Newnumtel']) AND $_POST['Newnumtel'] != $user['tel']) {
      $Newnumtel = htmlspecialchars($_POST['Newnumtel']);
      $insertnumtel = $bdd->prepare("UPDATE patient SET tel = ? WHERE id_patient = ?");
      $insertnumtel->execute(array($Newnumtel, $_SESSION['id']));
      header('Location: profil.php?id='.$_SESSION['id']);
   }
    if(isset($_POST['Newadresse']) AND !empty($_POST['Newadresse']) AND $_POST['Newadresse'] != $user['adresse']) {
      $Newadresse = htmlspecialchars($_POST['Newadresse']);
      $insertadresse = $bdd->prepare("UPDATE patient SET adresse = ? WHERE id_patient = ?");
      $insertadresse->execute(array($Newadresse, $_SESSION['id']));
      header('Location: profil.php?id='.$_SESSION['id']);
   }
    
?>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Espace Patient</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light fixed-top">
		<div class="container">
			<a class="navbar-brand" href="Acceuil.html"><img src="logo.png"></a> <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="qui%20sommes%20nous.html">Qui Sommes Nous ?</a>
					</li>
				
					<li class="nav-item">
						<a class="nav-link" href="#">Trouver un service</a>
					<ul>
					<li class="nav-item">
						<a class="nav-link" href="consultation%20a%20dom.php">Consultation à domicile</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="soins%20a%20dom.php">Soins à domicile</a>
					</li><li class="nav-item">
						<a class="nav-link" href="Prise%20de%20rdv.html">Prise de rendez-vous</a>
					</li><li class="nav-item">
						<a class="nav-link" href="Prise%20de%20sang.php">Prise de sang</a>
					</li><li class="nav-item">
						<a class="nav-link" href="accompagnement.php">Accompagnement a la sortie</a>
					</li><li class="nav-item">
						<a class="nav-link" href="LOCATION%20D%E2%80%99%C3%89QUIPEMENT%20M%C3%89DICAL.php">Location des Equipements medicaux</a>
                        
				</ul>
                <li class="nav-item">
						<a class="nav-link" href="inscription.php"><input type="button" value="Espace Patient">
</a>  <li class="nav-item">
                            <a class="nav-link" href="tel:+21620375000">+216 20 375 000 </a>      
                    </li></ul>
            </div></div>
	</nav>
	<div class="carousel slide" data-ride="carousel" id="carouselExampleIndicators">
		<ol class="carousel-indicators">
			<li class="active" data-slide-to="0" data-target="#carouselExampleIndicators"></li>
			<li data-slide-to="1" data-target="#carouselExampleIndicators"></li>
			<li data-slide-to="2" data-target="#carouselExampleIndicators"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img alt="First slide" class="d-block w-100" src="img1.jpg">
				<div class="carousel-caption d-none d-md-block">
					<h5>RESERVER VOTRE CONSULTATION A DOMICILE</h5>
					
				</div>
			</div>
			<div class="carousel-item">
				<img alt="Second slide" class="d-block w-100" src="img2.jpg">
				<div class="carousel-caption d-none d-md-block">
					<h5>RESERVER VOTRE CONSULTATION A DOMICILE</h5>
					
				</div>
			</div>
			<div class="carousel-item">
				<img alt="Third slide" class="d-block w-100" src="img3.jpg">
				<div class="carousel-caption d-none d-md-block">
					<h5>RESERVER VOTRE CONSULTATION A DOMICILE</h5>
					
				</div>
			</div>
		</div><a class="carousel-control-prev" data-slide="prev" href="#carouselExampleIndicators" role="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" data-slide="next" href="#carouselExampleIndicators" role="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
	</script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
	</script> 
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
	</script><br><br>
    
    <h1>ESPACE PATIENT</h1>
    <br><br>
    
   
      
    <div>
        <table align="center">
            
             <tr>
                 <td>
    <legend>Edition de mon profil</legend><br><br>
     <form method="post" action="">
         <fieldset>
       
        <tr>
        <td><label for="Nom">Nom:</label></td>
       <td>
        <input type="text" name="Newnom"  value="<?php echo $user['nom']; ?>" /><br /><br /></td>
        </tr>
        <tr>
        <td><label for="Nom">Prénom:</label></td>
        <td><input type="text" name="Newprenom" value="<?php echo $user['prenom']; ?>" /><br /></td>
        </tr>    
        <tr><td><label for="Nom">Adresse Mail:</label></td>
        <td><input type="email" name="Newemail" value="<?php echo $user['email']; ?>" /><br /></td>
        </tr>
        <tr><td><label for="Nom">Mot de passe:</label></td>
        <td><input type="password" name="Newmdp" value="<?php echo $user['mdp']; ?>" /><br /></td>
        </tr>
        <tr><td> <label for="Nom">Confirmer Votre Mot de passe</label></td>
       <td> <input type="password" name="Newrmdp" value="<?php echo $user['mdp']; ?>" /><br /></td>
    </tr>
       <tr><td> <label for="Nom">Numéro de Téléphone:</label></td>
        <td><input type="number" name="Newnumtel" value="<?php echo $user['tel']; ?>" /><br /></td>
    </tr>    
    <tr><td><label for="Nom">Adresse:</label></td>
        <td ><input type="text" name="Newadresse" value="<?php echo $user['adresse']; ?>" /><br /> </td></tr>
        <br><br>
        <tr><td><center><input type="submit" name="submit" value="Mettre a jour mon profil"> </center> </td></tr>
         </fieldset>
                     </form> <?php if(isset($msg)) { echo $msg; } ?>
                 </td></tr>
        </table>

 
     <!-- Site footer -->
    <footer>
    <table >
        <tr>
            <td class="footer"><h3><B> Besoin d'aide? </B> </h3>
        <h3>Contactez-nous </h3> <br>
        <img src="logo.png"></td>
            <td class="footer"><h3><B> A propos de nous</B></h3><p class="pf">
         THG Assistance est la première plateforme d’assistance <br>médicale et paramédicale à domicile en Tunisie qui vous <br> permet de réserver en ligne pour un accompagnement<br> médical complet </p></td>
            <td class="footer"><h3><B> Nous contacter </B></h3><p class="pf">
        Zone d'intervention: <br>
                Grand Tunis seulement<br></p> <a href="#">
        <B>Vous êtes Patient ?</B></a></td>
        </tr>
    </table>
        
        <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Powered by 
         <a href="#">Hashtag agency</a>
            </p>
          </div>
            <a  href="#" id="totop" class="u-trans-all-2s js-scroll-event on--totop" data-forch="300" data-visibleclass="on--totop">HAUT</a></div></div>
        </footer></div>
    </body>
</html>
<?php
}
else {
    header("location: connexion.php");
}
?>

