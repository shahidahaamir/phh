<?php 
/**
 * *@param mixed  $query requested SQL
 * @return 5[Array] tableau de ligne
 */
 

function selecttable($query)
{
    $maDb = mysqli_connect('localhost','root',"",'magasin');
    $res = mysqli_query($maDb, $query);

    //if (!$res)return null; 
    if ($res == false)return null;
    //print_r ($res);
   // echo '<br/>'.$res->num_rows.'<br/>';

    $rowcount = mysqli_num_rows($res);
    //echo 'rows count: '.$rowcount."<hr/>";
    //$row = mysqli_fetch_assoc($res); 
    $returnarray = array();
        while ($row = mysqli_fetch_assoc($res)) {
        //print_r ($row) ;
        //echo '<hr/>' ; 
         array_push($returnarray, $row);
        }
    return  $returnarray;
}   

//$monresultat = selecttable("SELECT idcat, titre FROM `categories`;  ") ; 
//print_r ($monresultat) ; 
?>