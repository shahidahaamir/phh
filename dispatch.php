<?php
if(isset($_GET["page"]))
{
     switch ($_GET["page"]) {
        case 'new':
            include ("include/formproduit.php");
            break;
        case 'edit':
            include ("include/formproduit.php");
            break;
        case 'Produit':
            include ("include/Produit.php");
            break;
        case 'Listeproduit':
            include ("include/Listeproduit.php");
            break;
        case 'Panier':
            include ("include/Panier.php");
            break;
            default:
        include ('include/home.php');
             break;
         }
}
else include ("include/home.php");

?>
