<?php

include('../koneksi.php');
session_start(); // tambahkan session_start() untuk memulai sesi

if(isset($_POST['submit'])){
    $username = isset($_POST['username']) ? $_POST['username'] : "";
    $password = isset($_POST['password']) ? $_POST['password'] : "";
    $query = mysqli_query($db,"select * from tb_login where username = '$username' AND password = '$password' "); // perbaiki variabel $user menjadi $username
    $sesi = mysqli_num_rows($query); 
    if ($sesi == 1){
        $data_admin = mysqli_fetch_array($query);
        $_SESSION['id_admin'] = $data_admin['id_user'];
        $_SESSION['sesi'] = $data_admin['username'];

        if(isset($_SESSION['id_admin'])){
            echo "<script>alert('Anda berhasil Log In');</script>"; // perbaiki penempatan tanda kutip pada alert
            echo "<meta http-equiv='refresh' content='0; url=../index.php?user=$sesi'>"; // tambahkan tanda "=" pada url
            
            
        }
 
    }
    else{
        echo "<meta http-equiv='refresh' content='0; url=../pages/login.php'>";
        echo "<script>alert('Anda gagal Log In');</script>"; // perbaiki penempatan tanda kutip pada alert
    
    }
}
?>