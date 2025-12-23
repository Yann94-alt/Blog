<?php
session_start();

// valider le formulaire
if(isset($_POST['valider'])){
    // verifier si les donne sont entree
    if(!empty($_POST['pseudo']) AND !empty($_POST['password'])){

        // donne par defaut
        $default_pseudo='admin';
        $default_password='admin';
           
        // donnee de l'utilisateur
        $user_pseudo=htmlspecialchars($_POST['pseudo']);
        $user_password=htmlspecialchars($_POST['password']);

        //verifier sile pseudo et le mdpp coorespondent 
        if($user_pseudo==$default_pseudo and $user_password==$default_password){

            $_SESSION['auth']=true;
            header('location:AdminInter.php');

        }else{
            $errorMsg="votre mot de passe est incorrecte..";
        }

    }else{
      $errorMsg="veuilles remplir les champs...";
    }
}