<?php session_start();     ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">

</head>
<body>
    <div class="mesaj">
        <h2>Başarılı</h2>

    </div>

<div class="row">
    <div class="col" style="margin:50px">

    <ul class="gonderiKontrol">
        <li>Adınız: <p style="display: inline-block; color:black"><?= $_SESSION["ad"] ?></p>  </li>
        <hr>
        <li>Soyadınz: <p style="display: inline-block;"><?= $_SESSION["soyad"] ?></p> </li>
        <hr>
        <li>Email: <p style="display: inline-block;"><?= $_SESSION["email"] ?></p> </li>
        <hr>
        <li>Konu: <p style="display: inline-block;"><?= $_SESSION["konu"] ?></p> </li>
        <hr>
        <li>Mesaj: <p style="display: inline-block;"><?= $_SESSION["mesaj"] ?></p> </li>

    </ul>

    </div>
</div>
    
</body>
</html>