<?php
require ('actions/adminActions/publishArticleAction.php');
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'head.php';?>
<body>
<?php include 'navbar.php';?> 

<form  class="container" method="POST" >
 
<?php 
  if (isset($errorMsg)){
    echo "<p class='errorMsg'>" .$errorMsg. "</p>";
  }
?>
  
  <div class="mb-3">
    <label  class="form-label" >Titre Arcticle</label>
    <input type="text"  name='titre' class="form-control" >
    
  </div>
  <div class="form-floating mb-3">
  <textarea class="form-control" placeholder="Écris ton article ici..." id="floatingTextarea" name="cont" style="height: 150px"></textarea>
  <label for="floatingTextarea">Contenu de l'article</label>
</div>

  <button type="submit" class="btn btn-primary" name='valider'>publier <Article></Article></button>
</form>
</body>
</html>