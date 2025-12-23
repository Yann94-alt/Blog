<?php require('actions/adminActions/loginAction.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'head.php' ?> 
<body> 
    <br> <br>
    <form method="POST">
        
<?php
if (isset($errorMsg)){echo "<p class='errorMsg'>".$errorMsg."</p>";}
?>

        <div class="mb-3">
           <label  class="form-label">pseudo admin</label>
           <input type="text" class="form-control" name="pseudo" autocomplete="off">
      </div>
  <div class="mb-3">
    <label  class="form-label">MOT de PASSe</label>
    <input type="password" class="form-control"  name="password">
  </div>
  <button type="submit" class="btn btn-primary" name="valider">SE connecter</button>
</form>
</body>
</html>