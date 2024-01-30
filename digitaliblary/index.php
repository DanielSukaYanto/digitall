<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="mts-removebg-preview.png" type="image/x-icon">
</head>
<body>  
<div class="container">
    <div class="login">
        <form action="aksi/cek_login.php" method="post">
            <h2>Silahkan Login Untuk Melanjutkan</h2>
            <label for="">Username :</label>
            <input type="text" placeholder="Input Your Username" required>
            <!--name n password-->
            <label for="">Password :</label>
            <input type="password" placeholder="Input Your Password" required>
            <button>Submit</button>
            <p>
               <P>Saya Belum Memiliki Akun <a href="regist.php">SignUp</a></P>
            </p>
        </form>
    </div>
    <div class="right">
        <img src="pep.jpeg">
    </div>
</body>
</html>