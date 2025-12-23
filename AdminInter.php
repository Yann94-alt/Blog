<?php
require('actions/adminActions/showArticle.php ')
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'head.php' ?>
<body>
    <?php include 'navbarAdmin.php' ?>
    <section class="container" >

<?php 
 while($article = $getArticle->fetch()){
    echo "
    <div class='card'>
        <div class='card-body'> 
            ".$article['Titre']."
            <hr/>
            <a href='actions/adminActions/deleteArticle.php?id=".$article['Id_Article']."' class='btn btn-danger'>
                Supprimer
            </a>
        </div>
        <hr/>
        <div class='card-footer'>
            publié par l'admin le ".$article['date_pub']."
        </div>
    </div> 
    <br/>
    ";
}

    ?> 

    </section>
</body>
</html>