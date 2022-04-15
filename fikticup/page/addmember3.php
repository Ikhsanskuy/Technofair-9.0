<!DOCTYPE html>
<html lang="en" style="background-image: url('../assets/img/regist.png');
  background-size: cover;">
    <head>
    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Technofair</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../page.css" rel="stylesheet" />

    </head>
<!-- multistep form -->
<body   style="background-image: url('../assets/img/regist.png');
  background-size: cover;">
<form action="../config/addmember3.php" method="post" id="msform" enctype="multipart/form-data">
  <!-- progressbar -->
  <!-- fieldsets -->
    <h2 class="fs-title">Data Pribadi</h2>
    <!-- <h3 class="fs-subtitle">This is step 1</h3> -->
    <input type="text" name="npm3" placeholder="NPM" required=""/>
    <input type="text" name="nama3" placeholder="Nama" required=""/>
    <input type="text" name="kelas3" placeholder="Kelas" required=""/>
    <input type="text" name="instansi3" placeholder="Instansi" required=""/>
    <input type="text" name="jurusan3" placeholder="Jurusan" required=""/>

    <a href="home.php">
    <button type="button" class="action-button">Previous</button>
    </a>

    <button type="submit" name="submit" class="action-button">Kirim</button>

</form>

<script type = "text/javascript" src="scripts.js"></script>  
</body>
</html>