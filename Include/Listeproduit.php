<?php
    include_once ('sqlfunction.php') ; 
    $listeProduits =getSqlProduit(isset($_GET["search"])?$_GET["search"]:false);
    
?>
<?php if(isset($_GET["search"]) && strlen($_GET["search"])>0){
    echo 'pour la recherche : '.$_GET['search'];
};?>

<h1>Liste des produits</h1>
<table class="item-produit">
    <?php
     for ($i=0; $i <count($listeProduits) ; $i++) { 
         $unProduitbyitterationList=$listeProduits[$i] ; 
    ?>
   <!-- <tr><td colspan="4" ><?php print_r($listeProduits[i]); ?>-->

    <tr class="produit">
        <td class="img">
            <img src=<?= $unProduitbyitterationList["photo"];?> alt=""></td>
        <td class="titre"><?= $unProduitbyitterationList["titre"];?><br/><?= $unProduitbyitterationList["prix"];?></td>
        <td class="button">
            <a href="?page=Produit&idp=<?= $unProduitbyitterationList['idpr']?>"><button type="button" class="btn btn-default">voir</button></a></br>
            <button type="button" class="btn btn-default">ajout</button>
        </td>
    </tr>
    <?php } ?>
</table>