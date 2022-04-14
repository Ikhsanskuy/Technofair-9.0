<!DOCTYPE html>
<html lang="en">
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
        <link href="page.css" rel="stylesheet" />

    </head>
<!-- multistep form -->
<body>
<form action="config/regist.php" method="post" id="msform" enctype="multipart/form-data">
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Data Pribadi</li>
    <li>Data Tim</li>
    <li>Input Data</li>
  </ul>
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Data Pribadi</h2>
    <!-- <h3 class="fs-subtitle">This is step 1</h3> -->
    <input type="text" name="npm" placeholder="NPM" />
    <input type="text" name="nama" placeholder="Nama" />
    <input type="text" name="kelas" placeholder="Kelas" />
    <input type="text" name="nohp" placeholder="Nomor HP" />
    <input type="text" name="instansi" placeholder="Instansi" />
    <input type="text" name="idline" placeholder="ID Line" />
    <input type="text" name="email" placeholder="Email" />
    <input type="text" name="jurusan" placeholder="Jurusan" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>


  <fieldset>
    <h2 class="fs-title">Data Tim</h2>
    <h3 class="fs-subtitle">Your presence on the social network</h3>
   
    <input type="text" name="nama_tim" placeholder="Nama Tim" />
    <!-- <input type="text" name="npm2" placeholder="NPM" /> -->
    <input type="button" name="previous" class="previous action-button" value="Previous" /> 
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>


  <fieldset>
    <h2 class="fs-title">Input data</h2>
    <h3 class="fs-subtitle">We will never sell it</h3>

    <label for="pembayaran">Input pembayaran</label><br>
    <input type="file" name="pembayaran" placeholder="Pembayaran" />

    <label for="KRS">Input KRS 1</label>
    <input type="file" name="berkas" placeholder="KRS1" />

    <!-- <label for="KRS">Input KRS 2</label>
    <input type="file" name="krs2" placeholder="Last Name" />

    <label for="KRS">Input KRS 3</label>
    <input type="file" name="krs3" placeholder="Last Name" /> -->
    
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <!-- <input type="submit" name="submit" class="submit action-button" value="Submit" /> -->
    <button type="submit" name="submit" class="action-button">Kirim</button>
  </fieldset>
</form>

<script type = "text/javascript" src="scripts.js"></script>  
</body>
</html>
