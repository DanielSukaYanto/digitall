<?php
//mengaktifkan session pada php
session_start();

//menghubungkan php dengan koneksi database
include '../koneksi/koneksi.php';


//menangkap data yang dikirim dari form login 
$username = $_POST['username'];
$password = md5($_POST['password']);


// menyeleksi data user dengan user naem dan password yang sesuai 
$login = mysqli_query($koneksi, "SELECT * from user where username='$username' and password='$password'");


//menghitung jumlah data yang di temukan 
$cek = mysqli_num_rows($login);


// cek apakah user name dan password di temukan pada database
if ($cek > 0){


$data = mysqli_fetch_assoc($login);

// cek jika user login sebagai admin 
if($data['level']=="admin"){

    //membuat session login dan username
    $_SESSION['username'] = $username;
    $_SESSION['level'] = "admin";

    //alihkan ke halaman dashboard admin
    header("location:../admin/admin.php");

    // cek jika user login sebagai petugas 
}else if($data['level']=="petugas"){
    //membuat session login dan username
    $_SESSION['username'] = $username;
    $_SESSION['level'] = "petugas";

    //alihkan ke halaman dashboard petugas
    header("location:../petugas/petugas.php");


     // cek jika user login sebagai peminjam 
}else if($data['level']=="peminjam"){
    //membuat session login dan username
    $_SESSION['username'] = $username;
    $_SESSION['level'] = "peminjam";

    //alihkan ke halaman dashboard peminjam
    header("location:../peminjam/peminjam.php");
    

}else{
 
    // alihkan ke halaman login kembali
    header("location:../index.php?pesan=gagal");
}	

}else{
    header("location:../admin/admin.php?pesan=gagal");
}
?>