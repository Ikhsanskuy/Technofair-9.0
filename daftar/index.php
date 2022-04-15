<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<!--kelas diganti semester-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
	<title>Sign Up Account</title>
	<link rel="icon" href="../../assets/pictures/logo/tf.png">
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="../../assets/css/bootstrap.min.css" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="../form.css">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center fadeInDown">
		<div class="card card-daftar">
			<div class="card-header">
				<h1>DAFTAR</h1>
			</div>
			<div class="card-body">
				<form action="simpan.php" method="post">
					<div class="fadeIn second">
					<div class="input-group form-group">
						<div class="input-group-prepend">
						</div>

					

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-at"></i></span>
						</div>
						<input type="text" name="username" class="form-control" placeholder="Username" required>
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="text" name="nama_tim" class="form-control form-password" placeholder="Nama Tim" required>
                    </div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="password" class="form-control form-password" placeholder="Password" required>
                    </div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="password2" class="form-control form-password" placeholder="Re-enter Password" required>
                    </div>

					<div>
					<label for="cars">Pilih lomba:</label>
						<select name="competition" id="cars" required>
							<option disabled selected value>...</option>
							<option value="ctf">Capture The Flag</option>
							<option value="fikticup">Fikti Cup</option>
							<option value="infographic">Infographic</option>
							<option value="uxdesign">UX Design</option>
						</select>
					</div>

                    
					</div>
					<h6>Note:</h6>
					<small>** Masukan identitas data diri ketua tim (data tidak boleh kosong)</small>

					<div class="form-group row justify-content-center mt-5">
						<button type="submit" name="daftar" class="btn2">Daftar</button>
					</div>
				</form>
			</div>
			<div class="card-footer links">
				<div class="d-flex justify-content-center">
					I have an account
				</div>
				<div class="d-flex justify-content-center">
                <a class="mx-1" href="../login/">Login</a> | <a class="mx-1" href="../../">Back</a>
				</div>
            </div>
		</div>
	</div>
</div>
</body>
</html>