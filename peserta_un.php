<div class="col-lg-12">
<div class="card">
  <div class="card-header">
  <b>DATA PESERTA UJIAN NASIONAL
  </div>
  <div class="card-body">
      <a href="?page=peserta_un/form_tambah.php" class="btn btn-primary mb-3">Tambah Data</a>
    <table class="table table-bordered table-hover">
        <thead>
            <tr class="bg-primary text-light">
                <th>No</th>
                <th>Nama Sekolah</th>
                <th>bulan</th>
                <th>Jumlah laki-laki</th>
                <th>Jumlah perempuan</th>
                <th>Tidak Lulus Laki</th>
                <th>Tidak Lulus perempuan</th>
                <th>Lulus Laki Laki</th>
                <th>Lulus Perempuan</th>
                <th>Jumlah Lulus</th>
                <th>Action</th>
               
            </tr>
        </thead>
        <tbody>
        
        <?php
                include 'include/koneksi.php';
                $sql = mysqli_query($db, "SELECT * FROM tb_peserta_un ORDER BY id_peserta ASC");
                $no=1;
                while ($ambil_data = mysqli_fetch_assoc($sql)) {
                  
                  
                    //variabel harus sesuai dengan database
                    $id_peserta = $ambil_data ['id_peserta'];
                    $nama_sekolah= $ambil_data['nama_sekolah'];
                    $bulan= $ambil_data['bulan'];
                    $jlh_laki= $ambil_data['jlh_laki'];
                    $jlh_pr= $ambil_data['jlh_pr'];
                    $tdklulus_laki= $ambil_data['tdklulus_laki'];
                    $tdklulus_pr= $ambil_data['tdklulus_pr'];
                    $lulus_laki= $ambil_data['lulus_laki'];
                    $lulus_pr= $ambil_data['lulus_pr'];
                    $jlh_lulus= $lulus_laki+$lulus_pr;
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $nama_sekolah ?></td>
                <td><?= $bulan ?></td>
                <td><?= $jlh_laki ?></td>
                <td><?= $jlh_pr ?></td>
                <td><?= $tdklulus_laki ?></td>
                <td><?= $tdklulus_pr ?></td>
                <td><?= $lulus_laki ?></td>
                <td><?= $lulus_pr ?></td>
                <td><?= $jlh_lulus ?></td>
                <td>
                    <!--  &id=<?= $id_user ?> -> menghapus data berdasarkan id usernya-->
                    <a href="?page=peserta_un/edit.php&id=<?= $id_peserta ?>" class="btn btn-warning"> Edit </a>

                    <a href="?page=peserta_un/hapus.php&id=<?= $id_peserta ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')"> Hapus </a>
                </td>
            </tr>
                <?php } ?>
        </tbody>
           
            
    </table>
  </div>
</div>


</div>