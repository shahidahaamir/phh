<?php 
    include_once('sqlfunction.php');
    if(isset($_GET['idp']))
    {
          $prod=getProduit($_GET['idp']);
    }
    else $prod=null;
    //
    echo "valeur du produit recupérer:" ;
    print_r($prod); 
?>
<div id="formulaire">
    <!-- snippet 'bs3-form' -->
    <?php 
            $constitutionUrl="?page=saveproduit";
            if(isset($_GET["idp"]))
            {
                $constitutionUrl.="&idp=".$_GET["idp"];
            }
    ?>
    <form action="<?= $constitutionUrl ?>" method="POST" role="form">

        <!-- action="?page=saveproduit<?= isset($_GET["idp"])?("&idp=".$_GET["idp"]):""?>"-->

        <legend>Edition produit</legend>

        <div class="form-group">
            <label for="">titre produit</label>
            <input type="text" class="form-control" name="titre_produit" id="titre_produit"
                placeholder="Saisir votre titre " value="<?= $prod?$prod["titre"]:"" ?>">


            <label for="">Ref produit</label>
            <input type="ref-produit" class="form-control" name="ref_produit" id="ref_produit"
                placeholder="Saisir votre reference" patern="REF-[\d\w]{1,25}" value="<?= $prod?$prod["ref"]:"" ?>">

            <label for="cast-produit">Catégorie</label>


            <?php
            include_once ('sqlfunction.php') ; 
            $monResultat = selecttable("SELECT idcat, titre FROM categories ;  ") ; 
            ?>

            <select name="cat-produit" id="cat-produit" class="form-control" required="required">
                <?php 
                         for($i=0;$i<count($monResultat);$i++)
                        {                    
                        echo '<option value="'.$monResultat[$i]["idcat"].'" ';
                        if($prod && $monResultat[$i]["idcat"]==$prod["idcat"])echo ' selected="selected" ';
                        
                        echo ' >'.$monResultat[$i]["titre"].'</option>';

//  echo '<option value="'.$monResultat[$i]["idcat"].'" '.($prod && $monResultat[$i]["idcat"]==$prod["idcat"]?' selected="selected" ':'').' >'.$monResultat[$i]["titre"].'</option>'; 
                         } 
                ?>
            </select>
        </div>

        <div class="form-group">
            <label for="photo-produit">Photo</label>
            <input type="file" class="form-control" name="photo_produit" id="photo_produit"
                placeholder="selectionnez votre image ">
        </div>

        <div class="form-group">
            <label for="Prix Produit">Prix produit</label>
            <input type="number" min="0.01" step="0.01" class="form-control" name="prix_produit" id="prix_produit"
                placeholder="saisir votre titre " value="<?= $prod?$prod["prix"]:"" ?>">
        </div>


        <div class="form-group">
            <label for="description-produit">Description produit</label>
            <textarea name="description_produit" id="description_produit" class="form-control" rows="3"
                placeholder="Fournir la Description" required="required"><?= $prod?$prod["description"]:"" ?>
            </textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>



</div>