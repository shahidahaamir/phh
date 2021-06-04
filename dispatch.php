
<?php
include_once ('sqlfunction.php') ; 
if(isset($_GET["page"]))
{
     switch ($_GET["page"]) {
        case 'new':
            include ("include/formproduit.php");
            break;
        case 'saveproduit':
            print_r($_GET);
            print_r($_POST);

           //tache n°1
        //    echo isset($_POST["titre_produit"])."-->".
        //     isset($_POST["cat_produit"])."-->".
        //    isset($_GET["idp"]);
           if (
               isset($_POST["titre_produit"])
                && isset($_POST["cat-produit"])
                && !isset($_GET["idp"])  
           ){
                $idp= insertSqlProduit($_POST["titre_produit"],$_POST["prix_produit"],$_POST["description_produit"],$_POST["ref_produit"],$_POST["cat-produit"]);
                     
                $_GET["idp"]=$idp;
          
                print_r($_GET);
          

           }elseif (   
                    isset($_POST["titre_produit"])
                    && isset($_POST["cat-produit"])
                    && !empty($_GET["idp"])
                ){
                    updateSqlProduit($_GET["idp"], $_POST["titre_produit"],$_POST["prix_produit"],
                    $_POST["description_produit"], $_POST["ref_produit"],$_POST["cat-produit"]);  
                }
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
