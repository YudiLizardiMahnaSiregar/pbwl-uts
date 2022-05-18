<div class="col-lg-12">
<div class="card">
  <div class="card-header">
  <b>DATA ABSENSI
  </div>
  <div class="card-body">
      <a href="?page=absensi/form_tambah.php" class="btn btn-primary mb-3">Tambah Data</a>
    <table class="table table-bordered table-hover">
        <thead>
            <tr class="bg-primary text-light">
                <th>No</th>
                <th>Nama Sekolah</th>
                <th>Bulan</th>
                <th>Kelas</th>
                <th>Sakit</th>
                <th>Izin</th>
                <th>Alfa</th>
                <th>Jumlah</th>
                <th>Action</th>
               
            </tr>
        </thead>
        <tbody>
        
        <?php
                include 'include/koneksi.php';
                $sql = mysqli_query($db, "SELECT * FROM tb_absensi ORDER BY id_absensi ASC");
                $no=1;
                while ($ambil_data = mysqli_fetch_assoc($sql)) {
                  
                  
                    //variabel harus sesuai dengan database
                    $id_absensi = $ambil_data ['id_absensi'];
                    $nama_sekolah= $ambil_data['nama_sekolah'];
                    $bulan= $ambil_data['bulan'];
                    $kelas= $ambil_data['kelas'];
                    $sakit= $ambil_data['sakit'];
                    $izin= $ambil_data['izin'];
                    $alfa= $ambil_data['alfa'];
                    $jumlah= $sakit + $izin + $alfa;
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $nama_sekolah ?></td>
                <td><?= $bulan ?></td>
                <td><?= $kelas ?></td>
                <td><?= $sakit ?></td>
                <td><?= $izin ?></td>
                <td><?= $alfa ?></td>
                <td><?= $jumlah ?></td>
                <td>
                    <!--  &id=<?= $id_user ?> -> menghapus data berdasarkan id usernya-->
                    <a href="?page=absensi/edit.php&id=<?= $id_absensi ?>" class="btn btn-warning"> Edit </a>

                    <a href="?page=absensi/hapus.php&id=<?= $id_absensi ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')"> Hapus </a>
                </td>
            </tr>
                <?php } ?>
        </tbody>
           
            
    </table>
  </div>
</div>


</div>