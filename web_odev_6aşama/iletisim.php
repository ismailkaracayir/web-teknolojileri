<?php session_start();     ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="kontrol.js"></script>

    
        <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <title>random</title>

    
        
    
    </head>
<body>
     
    <nav class="navbar navbar-inverse" style="background-color: black; margin: auto; box-shadow: 15px 15px 15px black; ">
        <div class="container-fluid">
          <div class="navbar-header">
          </div>
          <ul class="nav navbar-nav">
            <li  ><a href="anasayfa.php">Anasayfa</a></li>
            <li><a href="hakkimda.html">Hakkımda</a></li>
            <li><a href="ozgecmis.html">Ozgeçmiş</a></li>
            <li><a href="ilgialan.html">İlgialan</a></li>
            <li><a href="iletisim.php">iletişim</a></li>
            <li><a href="sehir1.html">Şehirim</a></li>
            <li><a href="mirasimiz.html">Mirasımız</a></li>

          </ul>
        </div>
      </nav>


<form action=""  method="POST" >
    <h1>İletişim</h1>


<div class="form-group m-3 " >
<label for="">adınız</label>
<input type="text"  class="form-control " value="" name="name" placeholder="" id="name">


</div>
<div class="form-group  m-3 ">
    <label for="">soyadınız</label>
    <input type="text"  class="form-control"  name="surname" placeholder="" id="soyad">
    
    </div>
    <div class="form-group  m-3 ">
        <label for="">Email</label>
        <input type="email" class="form-control"  name="email" placeholder="" id="email">
        
        </div>
       
            <div class="form-group  m-3 ">
                <label for="">Konu</label>
                <input type="text" class="form-control"  name="konu" placeholder="" id="konu">
                
                </div>
                
           
                <div class="form-group  m-3 ">
                    <label for="mesaj">Mesaj </label>
                    <textarea  style="width: 100%;  box-shadow: 1px 1px 1px 1px black;
                    " name="mesaj" id="mesaj" cols="10" rows="5"></textarea>
                    
                    </div>
    
              
                    <div class="form-group  m-3 ">
                        <input id="btn" onclick="formKontrol()"  style="width: 100px;" class="btn btn-primary" type="submit" name="submit" value="Gonder">
                        <input style="width: 100px;" class="btn btn-primary" type="reset" value="Temizle">

                        </div>




</form>







 <footer>
    <p>Copyright © 2021-2021 İsmail Karaçayır | Tüm Hakları Saklıdır.</p>
    

</footer>

    




</body>
<?php
    if(@$_POST["submit"]){   
        
        if($_POST["name"]!="" && $_POST["email"]!=""){
       
            $_SESSION["ad"] = $_POST["name"];
            $_SESSION["soyad"] = $_POST["surname"];
            $_SESSION["email"] = $_POST["email"];
            $_SESSION["konu"] = $_POST["konu"];
            $_SESSION["mesaj"] = $_POST["mesaj"];

            header("Location: gonderi.php");
            return true;
             }
        }
        
        else
        {
            return false;

        }

     
    ?>
</html>