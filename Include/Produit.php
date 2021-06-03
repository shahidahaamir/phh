<?php
    include_once ('sqlfunction.php') ; 
    $monidproduit = $_GET["idp"] ; 
    //echo $_GET["idp"] ; 
    $unproduitinfo = getProduit($monidproduit) ; 
    
    if ( $unproduitinfo ){
?>
<h1>Mon Produit</h1>
<div class="produit">
    <div class="gauche">
        <a href="<?php echo $unproduitinfo["photo"] ; ?>" target="_blank">
            <img src="<?php echo $unproduitinfo["photo"] ; ?>" alt="fraisier" />
        </a>
        <h1 class="prix"><?php echo $unproduitinfo["prix"] ; ?></h1>
    </div>

    <div class="droite">
        <h1 class="titre"><?php echo $unproduitinfo ["titre"]  ?></h1>
        <h4>Categorie : souvenir </h1>
            <div class="description">
            <?php echo $unproduitinfo["description"] ; ?>
            </div>
            <div class="button>">
                <button type="button" class="btn btn-default">Ajouter Panier</button>
            </div>
    </div>
    <?php
        }else{
            echo "<h2>Produit non existant</h2>";
         }
    ?>