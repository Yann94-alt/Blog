<?php 
require('../database.php');


if(isset($_GET['id']) AND !empty($_GET['id'])){
$Id_delete=$_GET['id'];
$Id_delete_Exist = $bdd->prepare('SELECT Id_Article FROM article WHERE Id_Article = ?');
$Id_delete_Exist->execute([$Id_delete]);


if($Id_delete_Exist->rowCount()>0){
    $deleteArticle=$bdd->prepare('DELETE FROM article WHERE Id_Article=?');
    $deleteArticle->execute(array($Id_delete));

    header('location:../../AdminInter.php');

}else{
    echo"Aucun article trouve";
}
}else{
 echo"Aucun article reouve";
} 