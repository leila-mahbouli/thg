<?php
$bdd = new PDO ('mysql:host=127.0.0.1; port=3308;dbname=thg','root','');

if(isset($_POST['submit']))    
{if(!empty($_POST['praticien'])AND!empty($_POST['prenom'])AND!empty($_POST['nom'])AND!empty($_POST['email'])AND!empty($_POST['rdv'])AND!empty($_POST['telephone']))
    {$Date=htmlspecialchars($_POST['rdv']);
    $Prenom =htmlspecialchars($_POST['prenom']);
    $Nom = htmlspecialchars($_POST['nom']);
    $Email = htmlspecialchars($_POST['email']);
$Praticien=htmlspecialchars($_POST['praticien']);
     $Numtel= htmlspecialchars($_POST['telephone']);
    $Numtellength=strlen($Numtel);
    if($Numtellength >=8 and $Numtellength <=8)
    { 
        $insertpt =$bdd->prepare("INSERT INTO consultation(date,prenom,nom,email,telephone,praticien )Values(?,?,?,?,?,?)");
    $insertpt->execute(array($Date,$Prenom,$Nom,$Email,$Numtel,$Praticien));
             
         }
    else{ $erreur ="Le numéo de Téléphone doit contenir 8 chiffres" ;}
    
}else
    {
    $erreur ="Tous les champs doivent étre complétés" ;    
    }

}









?>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<title>Consultation</title>
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
</a>       
       <li class="nav-item"> <a class="nav-link" href="tel:+21620375000">+216 20 375 000 </a> 
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
    </script>
    <section><h1>RÉSERVER UN MÉDECIN POUR
UNE CONSULTATION À DOMICILE EN TUNISIE</h1>
    <table>
    <td><p>
    Vous avez besoin de prendre rendez-vous avec un spécialiste ou un médecin généraliste <br> à domicile pour vous ou pour l’un de vos proches à distance ?
<br>
Vous êtes à la recherche d’un pédiatre, d’un cardiologue, d’un neurologue… <br>qui soit disponible pour se déplacer à votre domicile lorsque vous en avez besoin ?
<br>
THG Assistance vous permet de rapidement trouver et de prendre un rendez-vous avec<br> un médecin disponible pour effectuer une consultation à domicile, une visite médicale ou <br>pour vous délivrer un certificat directement sur place et où que vous soyez !<br>     </p></td>    
        
   <td><img class="capture" src="Capture.PNG"></td>     
        
    </table>
    
    
    
    </section>
    
    
    
   
    <div>
     <table align="center">
            
             <tr>
                 <td>
    <legend>Consultation a domicile</legend><br><br>
     <form method="post" action="">
         <fieldset>
       
        <tr>
        <td><label for="Nom">Praticien:</label></td>
       <td><select name="praticien">
  <option value="Cardiologue">Médecin Cardiologue</option>
  <option value="Généraliste" selected>Médecin Généraliste</option>
  <option value="Neurologue">Médecin Neurologue</option>
  <option value="Dérmatologue">Médecin Dérmatologue</option>
  <option value="Gynécologue">Médecin Gynécologue</option>    
</select></td>
        </tr>
        <tr>
        <td><label for="Nom">Rendez-vous:</label></td>
        <td><input type="date" name="rdv"></td>
        </tr>    
        <tr><td><label for="Nom">Prénom:</label></td>
        <td><input type="text" name="prenom"></td>
        </tr>
        <tr><td> <label for="Nom">Nom de famille</label></td>
       <td> <input type="text" name="nom"></td>
    </tr>
        <tr><td><label for="Nom">Email:</label></td>
        <td><input type="email" name="email"></td>
        </tr>
        
       <tr><td> <label for="Nom">Numéro de Téléphone:</label></td>
        <td><input type="number" name="telephone"></td>
    </tr>    
   
        <br><br>
        <tr><td><center><input type="submit" name="submit" value="Confirmer"> </center> </td></tr>
         </fieldset>
                     </form> 
                 </td></tr>
        </table>
         <?php
        if(isset($erreur))
        {
            echo '<font color="red">'.$erreur."</font>";
        }
        
        ?>
             
        <td> <center>
 
            
            </center></td> <br>
    
    
   
    
    
    
    
    
    
    
             
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
            </footer>
    </div>
    </body>
        
</html>
