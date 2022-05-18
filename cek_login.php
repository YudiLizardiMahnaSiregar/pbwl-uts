<?php

//session -> mengatur cara kerja login seperti kita lagi buka instagram dan buka browser baru maka akan tetap login
session_start();

if ($_POST) {
    include 'include/koneksi.php';

    $user =$_POST['user'];
    $pwd = $_POST['pwd'];

    if ($user != "" and $pwd != "") {
        
        //binary untuk membuat huruf sesuai dengan yang ada di database
        $sql = mysqli_query($db, "SELECT * FROM tb_admin WHERE BINARY username='$user' AND password ='$pwd' ") or die ("QUERY SALAH");
        
        $cek_baris = mysqli_num_rows($sql);
    
        if ($cek_baris > 0) {

            $ambil_data = mysqli_fetch_assoc($sql);
            $username =$ambil_data['username'];
            $level_user =$ambil_data['level'];

            $_SESSION['username'] = $username;
            $_SESSION['level'] = $level_user;

            header("location: index.php");
       
        }else {
            // echo "LOGIN GAGAL";
            header("location: login.php");
        }
    }
}
