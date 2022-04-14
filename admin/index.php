<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/style.css">

</head>

<body>
    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true">

        <div class="logo">
            <label for="chk" aria-hidden="true">TechnoFair 9.0</label>
            <img src="../assets/img/logo.png" alt="logo" style="border-radius: 50%; display: block; width: 150px;">
        </div>

        <div class="login">
            <form action="config/login.php" method="POST">

                <label for="chk" aria-hidden="true">Login</label>

                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>

                <a href="../admin.php">
                    <button type="submit" name="login">Login</button>
                </a>
            </form>
        </div>
    </div>
</body>

</html>