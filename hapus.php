<?php

include'include/koneksi.php';

//mengambil data dari tag a yang kita buat
$tangkap_id=$_GET['id'];

$hapus=mysqli_query($db,"DELETE FROM tb_user WHERE id_user='$tangkap_id'");

echo " 
<script>
    alert('Tambah Data Berhasil');
    window.location.href = '?page=user/tampil_data.php'
</script>
";