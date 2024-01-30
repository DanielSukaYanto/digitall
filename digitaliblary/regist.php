<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="mts-removebg-preview.png" type="image/x-icon">
</head>
<body>  
<div class="container">
    <div class="login">
        <form action="" method="post">
            <h4>Silahkan Masukan Data Anda Untuk Melanjutkan</h4>
            <label for="">NIS :</label>
            <input type="text" placeholder="NIS" required>
            <label for="">Nama Lengkap :</label>
            <input type="text" placeholder="Input Your Full Name" required>
            <label for="">Email :</label>
            <input type="email" placeholder="Input Your Email" required>
            <label for="">Alamat :</label>
            <input type="text"  required>
            <label for="">Username :</label>
            <input type="text" placeholder="Input Your Username" required>
            <!--name n password-->
            <label for="">Password :</label>
            <input type="password" placeholder="Input Your Password">
            <p>
            <div class="answer">
                <select name="customer" id="customer" required>
                    <option value="">Pilih Level</option>
                    <option value="XI">XI</option>
                    <option value="XII">XII</option>
                </select>
            </div>
            <button>Submit</button>
               <P>Saya Sudah Memiliki Akun <a href="index.php">Sign</a></P>
            </p>
        </form>
    </div>
    <div class="right">
        <img src="pep.jpeg">
    </div>
</body>
</html>