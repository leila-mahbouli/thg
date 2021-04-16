<?php
session_start();
require_once 'panier.php';
$panier = new Panier('produits');
$listeProduits = $panier -> getPanier ();
?>

<?php if(!$listeProduits){ ?>

<p> Votre panier est vide </p>

<?php }else{ ?>

<table>

    <tr>
        <td>Nom</td>
        <td>Prix</td>
        <td>Durée</td>
    </tr>
    
    
<?php foreach($listeProduits as $produit){ ?>
    
    <tr> 
    
     <td><?php print $produit['nom'] ?></td>
     <td><?php print $produit['prix'] ?></td>
     <td><?php print $produit['qte'] ?></td>    
    
    </tr>
    
    <?php } ?>    
</table>


<?php } ?>
