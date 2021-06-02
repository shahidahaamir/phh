<?php
if(isset($_GET["page"]))
{
        switch ($_GET["page"]) {
            case 'new':
            //include ("include/formproduit.php");
           // break;  
            case 'edit':
                include ("include/formproduit.php");
                break;
            default:
             include ('include/home.php');
             break;
         }
}
else include ("include/home.php");

?>
