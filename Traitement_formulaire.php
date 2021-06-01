<html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
    
    $mavariable = 0 ;
    $mavariable = $mavariable + 3;
    echo $mavariable."\n" ; 
    ?>

</body>
<h1>tableau Get</h1>
    <?php print_r($_POST);
     ?>
<h1>Affichage de la description</h1>
<?php
    //affichage position d'un tableau
    echo $_POST["description_produit"] ; 
?>  
<h1>Definition</h1>
<?php
   $mesData = null ;
   echo 'isset post'.count($_POST).'<br/>isset GET'.count($_GET);
   if (count($_POST)>0){
    $mesData  = $_POST ; }
elseif (count($_GET)>0){
        $mesData  = $_GET ; 
        }else{
        $mesData  = "rien à voir";
        exit(0);}

 ?>



