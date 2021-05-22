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
            <li> <a > HoşGeldin:<?= $_SESSION["username"] ?></a> </li>


          </ul>
        </div>
      </nav>
       <header class="col-sm" >
          <h1 style="color: black;">Hakkımda</h1>
          <p class="hakkimda">  
            Merhaba, ben İsmail Karaçayır.  <br>
             Sakarya Üniversitesi‘nin Bilgisayar ve Bilişim sitemleri Fakültesinde
              Bilgisayar Mühendisliği bölümünde okuyorum. Üniversite 
              eğitimimde Bilgisayar Bölümü’nün yanı sıra digital pazarlama ve e-ticaret konularında kendimi geliştirmek 
              adına bir çok egitim aldım.
              Mühendislikden önce Adiyaman üniversitesinde bilgisayar programcılığı bölümünü 3.6 ortalama ile bitirdim.
             Programcılık egitimim devam ederken adyü bilgi işlem dairesinde 1.5 ay staj yaptım.
             Staj deneyimimin bana kattıkları donanım ve ağ cihazları konusunda bilgi ve tecrübe edinmemi sağladı...  
             <a href="hakkimda.html" class="devamgor">Devamını görmek için tıklayın </a> 
        </p>

       </header>
       <main class="col-sm">
           <h1 >Şehrim</h1>
           <div class="card">
   	
            <img src="img/merkezcami.jpeg" alt="" class="card-image">
            <div class="card-body">
                <h4 class="card-title">
                    Adana Merkez Cami
                </h4>
                <p class="card-text">
                    Merkez Park, Seyhan Nehri'nin her iki yakasına kurulmuş toplam 33 hektar büyüklüğündeki şehir parkıdır.
                     Güneyde Sabancı Merkez Camii ile kuzeyde Galleria Alışveriş Merkezi arasında kalan park, 2004 yılında açılmıştır.
                      Türkiye'nin en büyük parkıdır.
                      <a href="index.html" class="card-text-a" >Devamını görmek için tıklayın </a> 

                </p>
            </div> 	
        
        
    </div>
    <div class="card">
   	
        <img src="img/20190809151226959_20190111110947922_THK ORHAN OZGULBAS ADANA Seyhan Nehri Taskopru logolu p .jpg" alt="" class="card-image">
        <div class="card-body">
            <h4 class="card-title">  
                Taş Köprü
            </h4>
            <p class="card-text">
                Adana'nın simgesi olarak kabul edilen köprü, bir Roma dönemi eseridir.
                [1] Taşköprü'nün Roma İmparatoru Hadrianus tarafından yaptırıldığı ve Roma İmparatoru 
                I. Justinianus zamanında ciddi şekilde onarıldığı aktarılmaktadır.
                <a href="index.html" class="card-text-a" >Devamını görmek için tıklayın </a> 

            </p>
        </div> 	
    
    
</div>
<div class="card">
   	
    <img src="img/adana-merkez-park.jpg" alt="" class="card-image">
    <div class="card-body">
        <h4 class="card-title">
            Merkez Park
        </h4>
        <p class="card-text">
            Merkez Park, Seyhan Nehri'nin her iki yakasına kurulmuş toplam 33 hektar büyüklüğündeki şehir parkıdır.
                     Güneyde Sabancı Merkez Camii ile kuzeyde Galleria Alışveriş Merkezi arasında kalan park, 2004 yılında açılmıştır.
                      Türkiye'nin en büyük parkıdır.
                      <a href="index.html" class="card-text-a" >Devamını görmek için tıklayın </a> 
        </p>
    </div> 	


</div>
<div class="card">
   	
    <img src="img/20171016141538056_ADANA SAAT KULESI GULCAN ACAR (11).jpg" alt="" class="card-image">
    <div class="card-body">
        <h4 class="card-title">
            Büyük Saat
        </h4>
        <p class="card-text">
            Büyük Saat, Türkiye'deki en uzun saat kulesidir ve 
            uzunluğu 32 metredir. Saat kulesi Adana'nın Seyhan ilçesinde bulunur.
            Büyük Saat inşasına Ziya Paşa ile başlandı ve 1882 yılında (Abidin Paşa zamanında) tamamlandı.
             Büyük Saat tarihte modernleşmenin simgesi olarak görülmüştür.
             <a href="index.html" class="card-text-a" >Devamını görmek için tıklayın </a> 

        </p>
    </div> 	


</div>

       </main>

       <footer>
           <p>Copyright © 2021-2021 İsmail Karaçayır | Tüm Hakları Saklıdır.</p>
           

       </footer>
       
    
    
</body>
</html>