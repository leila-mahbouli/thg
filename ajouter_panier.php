<?php 
session_start();

$bdd = new PDO ('mysql:host=127.0.0.1; port=3308;dbname=thg','root','');
$result = $bdd->query ('SELECT * FROM produit WHERE id ='.$_POST['id']);
$produit = $result->fetch(PDO::FETCH_ASSOC);

require_once 'panier.php';

$panier = new Panier('produits');

$valeurs=array(
'nom' =>$produit['nom'],
'prix' =>$produit['prix'],
'qte' =>$_POST['qte'],
'id' =>$produit['id'],
'durée' =>$_POST['durée'],    
);


$panier ->set($_POST['id'], $valeurs);

header('Location: votre_panier.php');

?>