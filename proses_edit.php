<?php

if ($_POST) {
    include 'include/koneksi.php';

    $id_user=$_POST['id'];
    $naleng = $_POST['naleng'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];
    
    if ($naleng !="") {
        
      $sql = mysqli_query($db,"UPDATE tb_user SET naleng='$naleng', username='$naleng', pwd_user='$password',level_user='$level' WHERE id_user ='$id_user'");
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
            window.location.href = '?page=user/edit.php&id=$id'
        </script>
        ";
    }


}