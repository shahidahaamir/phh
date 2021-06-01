<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My php store</title>
</head>

<body>

</body>

<!-- Latest compiled and minified CSS & JS -->
<link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="//code.jquery.com/jquery.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>


<nav class="navbar navbar-inverse" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Title</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
        </ul>
        <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Link</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li><a href="#">Separated link</a></li>
                </ul>
            </li>
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>

<div id="formulaire">

    <form action="Traitement_formulaire.php" method="POST" role="form">
        <legend>Edition formulaire</legend>

        <div class="form-group">
            <label for="">titre produit</label>
            <input type="text" class="form-control" name ="titre_produit"  id="titre_produit" placeholder="Saisir votre titre ">

            <label for="">Ref produit</label>
            <input type="ref-produit" class="form-control" name ="ref_produit" id="ref_produit" placeholder="Saisir votre reference"
                patern="REF-[\d\w]{1,25}">

            <label for="cast-produit">Catégorie</label>
            <select name="cast_produit" id="inputcast produit" class="form-control" required="required">
                <option value="dessert">dessert</option>
                <option value="Laitier">laitier</option>
            </select>
        </div>

        <div class="form-group">
            <label for="photo-produit">Photo</label>
            <input type="file" class="form-control" name="photo_produit" id="photo_produit" placeholder="selectionnez votre image ">
        </div>

        <div class="form-group">
            <label for="Prix Produit">Prix produit</label>
            <input type="number" min="0.01" step="0.01" class="form-control" name="prix_produit" id="prix_produit"
                placeholder="saisir votre titre ">
        </div>


        <div class="form-group">
            <label for="description-produit">Description produit</label>
            <textarea name="description_produit"  id="description_produit" class="form-control" rows="3"
                placeholder="Fournir la Description" required="required"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>



</div>

</html>