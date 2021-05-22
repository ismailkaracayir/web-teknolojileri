<?php session_start();     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>random</title>
</head>
<body>
    
<form class="form-signin" style="margin-top:100px;" method="POST">
      <h1 class="h3 mb-3 font-weight-normal">Giriş</h1>
      <label for="inputEmail" class="sr-only">Kullanici Adi</label>
      <input type="Email" id="inputEmail" class="form-control" name="k_adi" placeholder="Kullanici Adi" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" name="sifre" placeholder="Şifre" required>
    
      <input type="submit" name="submit" value="Giriş" class="btn btn-lg btn-primary btn-block" >
      <p class="mt-5 mb-3 text-muted">&copy; İsmail Karaçayır</p>
    </form>

    <?php
    if(@$_POST["submit"]){
        if($_POST["k_adi"]=="g201210303@sakarya.edu.tr" && $_POST["sifre"]=="g201210303" )
        {
            $_SESSION["girisKontrol"] = 1;
            $_SESSION["username"] = $_POST["k_adi"];
            header("Location: anasayfa.php");
            return true;

        }
        else
        {
            echo "<p style='text-align:center; color:red; '>Kullanıcı Adi yada Parola Yanlış</p>";
            return false;

        }




    }
    
    
    
    
    ?>



</body>
</html>