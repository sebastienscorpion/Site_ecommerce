<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <title>Ecommerce</title>
</head>
<body>
<?php include "include/nav.php"; ?>

<div class="container py-4">
  <?php
    if(isset($_POST['ajouter'])){
     $login = $_POST['login'];
     $pwd = $_POST['password'];


     if(!empty($login) && !empty($pwd)){
         echo "bonjour $login votre mot est : $pwd ";
       }else{

        ?>
        <div class="alert alert-danger" role="alert">
        Login, password sont obligatoire
        </div>
        <?php
       
       }

   
    }
  ?>
<form method="post">
    <label 
      class="form-label">Login
   </label>
    <input type="text"  class="form-control" name="login">

    <label 
      class="form-label">Password
   </label>
    <input type="password"  class="form-control" name="password">

    <input type="submit" value="Ajouter Utilisateur" class=" btn btn-primary  my-2" name="ajouter">

  </form>
</div>
  
</body>
</html>