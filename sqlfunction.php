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
    if ($res == false)return false;
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

function getProduit($id)
{
    // echo 
    $query='SELECT `idpr`, PR.`titre` AS titre, `prix`, PR.`description` AS decription, `ref`, `photo`, PR.`idcat` AS idcat,CA.`titre` AS cat_titre,CA.`description` AS cat_desc FROM `produits` PR, `categories` CA WHERE CA.`idcat`=PR.`idcat` AND `idpr`='.$id.';';
    //reception d'un tableau de resultat possédant q'un seul enregistrement
    //je ne retourne que le 1er (la seule) ligne du tableau 
    $results=selectTable($query);
    //ternaire equivalant a if/else
    //   condition booleen  ?  valeur si cond vrai  :  valeur si cond false
    return $results?$results[0]:false;
}

function getSqlProduits($search=false)
{
$query='SELECT `idpr`, PR.`titre` AS titre, `prix`, PR.`description` AS decription, `ref`, `photo`, 	PR.`idcat` AS idcat,CA.`titre` AS cat_titre,CA.`description` AS cat_desc FROM `produits` PR, `categories` CA WHERE CA.`idcat`=PR.`idcat` ';
    if($search)
    {
        $query.="AND PR.titre LIKE '%".$search."%'";
        
    }
    
    return selectTable($query);
} 
?>