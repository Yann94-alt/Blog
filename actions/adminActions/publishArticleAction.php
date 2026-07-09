<?php
require('actions/database.php');

if(isset($_POST['valider'])){
    if(!empty($_POST['titre']) AND !empty($_POST['cont'])){
        $article_titre=htmlspecialchars($_POST['titre']);
        $article_cont=htmlspecialchars($_POST['cont']);
      $current_date = date('d/m/y H:i:s');
       
        //inseer article
        $insertArticle=$bdd->prepare('INSERT INTO article (Titre, Contenu, date_pub) VALUES (?,?,?)');
        $insertArticle->execute(array($article_titre,$article_cont,$current_date ));
        //redirection
        header('location:AdminInter.php');
    }else{
        $errorMsg="veuillez remplir les champs ....";
    }
}