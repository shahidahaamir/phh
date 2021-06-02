<div id="formulaire">

    <form action="Traitement_formulaire.php" method="POST" role="form">
        <legend>Edition formulaire</legend>

        <div class="form-group">
            <label for="">titre produit</label>
            <input type="text" class="form-control" name="titre_produit" id="titre_produit"
                placeholder="Saisir votre titre ">

            <label for="">Ref produit</label>
            <input type="ref-produit" class="form-control" name="ref_produit" id="ref_produit"
                placeholder="Saisir votre reference" patern="REF-[\d\w]{1,25}">

            <label for="cast-produit">Catégorie</label>


            <?php
            include_once ('sqlfunction.php') ; 
            $monresultat = selecttable("SELECT idcat, titre FROM categories ;  ") ; 
            ?>

            <select name="cast_produit" id="inputcast produit" class="form-control" required="required">
                <?php
                for($i=0;$i<count($monresultat );$i++)
                {
                    echo '<option value="'.$monresultat[$i]["idcat"].'">'.$monresultat[$i]["titre"].'</option>' ; 
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
                placeholder="saisir votre titre ">
        </div>


        <div class="form-group">
            <label for="description-produit">Description produit</label>
            <textarea name="description_produit" id="description_produit" class="form-control" rows="3"
                placeholder="Fournir la Description" required="required"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>



</div>