<?php

if ($_POST) {
    include 'include/koneksi.php';

    $naleng = $_POST['naleng'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];
    
    if ($naleng !="") {
        
      $sql = mysqli_query($db,"INSERT INTO tb_user(naleng,username,pwd_user,level_user) VALUES ('$naleng','$username','$password','$level')");
        // echo "Data Berhasil Ditambah";
        echo " 
        <script>
            alert('Tambah Data Berhasil');
            window.location.href = '?page=user/tampil_data.php'
        </script>
        ";
    }else {
        echo " 
        <script>
            alert('Tambah Data Gagal');
            window.location.href = '?page=user/form_user.php'
        </script>
        ";
    }


}