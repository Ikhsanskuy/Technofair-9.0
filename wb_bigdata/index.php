<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="wb.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="config/registrasi.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Nama Lengkap</span>
            <input name="nama" type="text" placeholder="Nama Lengkap" required>
          </div>
          <div class="input-box">
            <span class="details">Asal Daerah</span>
            <input name="asal" type="text" placeholder="Asal Daerah" required>
          </div>
          <div class="input-box">
            <span class="details">Institusi</span>
            <input name="institusi" type="text" placeholder="Institusi" required>
          </div>
          <div class="input-box">
            <span class="details">Status</span>
            <input name="status" type="text" placeholder="Status Pekerjaan" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input name="email" type="email" placeholder="Email" required>
          </div>
          <div class="input-box">
            <span class="details">Nomor HP</span>
            <input name="nohp" type="number" pattern="[0-9]*" placeholder="Nomor HP" required>
          </div>
          <div class="input-box">
            <span class="details">ID Line</span>
            <input name="idline" type="text" placeholder="ID Line" required>
          </div>
        </div>

        <div class="button">
          <input name="submit"type="submit" value="Register">
          <!-- <button class=button type="submit" name="submit">daftar</button> -->
        </div>
      </form>
    </div>
  </div>

</body>
</html>

