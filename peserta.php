<div class="col-lg-12">
<div class="card">
  <div class="card-header">
  <b>DATA PESERTA DIDIK
  </div>
  <div class="card-body">
      <a href="?page=peserta/form_tambah.php" class="btn btn-primary mb-3">Tambah Data</a>
    <table class="table table-bordered table-hover">
        <thead>
            <tr class="bg-primary text-light">
                <th>No</th>
                <th>Nama Sekolah</th>
                <th>Kelas</th>
                <th>bulan</th>
                <th>Jumlah laki-laki</th>
                <th>Jumlah perempuan</th>
                <th>keluar</th>
                <th>masuk</th>
                <th>umur laki-laki</th>
                <th>umur perempuan</th>
                <th>Action</th>
               
            </tr>
        </thead>
        <tbody>
        
        <?php
                include 'include/koneksi.php';
                $sql = mysqli_query($db, "SELECT * FROM tb_peserta ORDER BY id_peserta ASC");
                $no=1;
                while ($ambil_data = mysqli_fetch_assoc($sql)) {
                  
                  
                    //variabel harus sesuai dengan database
                    $id_peserta = $ambil_data ['id_peserta'];
                    $nama_sekolah= $ambil_data['nama_sekolah'];
                    $kelas= $ambil_data['kelas'];
                    $bulan= $ambil_data['bulan'];
                    $jlh_laki= $ambil_data['jlh_laki'];
                    $jlh_pr= $ambil_data['jlh_pr'];
                    $keluar= $ambil_data['keluar'];
                    $masuk= $ambil_data['masuk'];
                    $umur_laki= $ambil_data['umur_laki'];
                    $umur_perempuan= $ambil_data['umur_perempuan'];
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $nama_sekolah ?></td>
                <td><?= $kelas ?></td>
                <td><?= $bulan ?></td>
                <td><?= $jlh_laki ?></td>
                <td><?= $jlh_pr ?></td>
                <td><?= $keluar ?></td>
                <td><?= $masuk ?></td>
                <td><?= $umur_laki ?></td>
                <td><?= $umur_perempuan ?></td>
                <td>
                    <!--  &id=<?= $id_user ?> -> menghapus data berdasarkan id usernya-->
                    <a href="?page=peserta/edit.php&id=<?= $id_peserta ?>" class="btn btn-warning"> Edit </a>

                    <a href="?page=peserta/hapus.php&id=<?= $id_peserta ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')"> Hapus </a>
                </td>
            </tr>
                <?php } ?>
        </tbody>
           
            
    </table>
  </div>
</div>


</div>