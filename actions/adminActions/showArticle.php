<?php
require('actions/database.php');
$getArticle=$bdd->query('SELECT Id_Article,Titre,date_pub From article ORDER BY Id_Article DESC');