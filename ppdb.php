<div class="col-lg-12">
<div class="card">
  <div class="card-header">
  <b>DATA PENERIMAAN PESERTA DIDIK BARU
  </div>
  <div class="card-body">
      <a href="?page=ppdb/form_tambah.php" class="btn btn-primary mb-3">Tambah Data</a>
      <!-- <a href="include/artikel/expert.php" class="btn btn-danger mb-3">Expert To Excel</a> -->
      <hr>
      <div class="form-group">
          <!-- <form method="POST">
             <input type="text" name="cari" placeholder="Search">
             <input type="submit" value="Refresh" onclick="window.history.back();"> -->
          </form>
            
      </div>
    <table class="table table-responsive table-bordered">
        <thead>
            <tr class="bg-primary text-light">
            <th>No</th>
                    <th>Asal Satpen</th>
                    <th>Jumlah Siswa</th>
                    <th>Jumlah Rombel</th>
                    <th>Pendaftar Laki-Laki</th>
                    <th>Pendaftar Perempuan</th>
                    <th>Diterima Laki-Laki</th>
                    <th>Diterima Perempuan</th>
                    <th>Jumlah Diterima</th>
                    <th>Action</th>
            </tr>
        </thead>
        <tbody>
        
        <?php
                include 'include/koneksi.php';
                // $sql = mysqli_query($db,"SELECT * FROM tb_artikel ORDER BY id_artikel ASC");

                $sql = mysqli_query($db, "SELECT * FROM tb_ppdb ORDER BY id_peserta ASC");
                $no=1;
                while ($ambil_data = mysqli_fetch_assoc($sql)) {
                  
                    //variabel harus sesuai dengan database
                    $id_peserta=$ambil_data['id_peserta'];
                    $asal_satpen= $ambil_data['asal_satpen'];
                    $jlh_siswa= $ambil_data['jlh_siswa'];
                    $jlh_rombel= $ambil_data['jlh_rombel'];
                    $pendaftar_laki= $ambil_data['pendaftar_laki'];
                    $pendaftar_pr= $ambil_data['pendaftar_pr'];
                    $diterima_laki= $ambil_data['diterima_laki'];
                    $diterima_pr= $ambil_data['diterima_pr'];
                    $jumlah_diterima= $diterima_laki+$diterima_pr;

            ?>
            <tr>
            <td><?= $no++ ?></td>
                    <td><?= $asal_satpen ?></td>
                    <td><?= $jlh_siswa ?></td>
                    <td><?= $jlh_rombel ?></td>
                    <td><?= $pendaftar_laki ?></td>
                    <td><?= $pendaftar_pr ?></td>
                    <td><?= $diterima_laki ?></td>
                    <td><?= $diterima_pr?></td>
                    <td><?= $jumlah_diterima?></td>
                   
                    
                <td>
                    <!--  &id=<?= $id_user ?> -> menghapus data berdasarkan id usernya-->
                    <a href="?page=ppdb/edit.php&id=<?= $id_peserta ?>" class="btn btn-warning"> Edit </a>

                    <a href="?page=ppdb/hapus.php&id=<?= $id_peserta ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')"> Hapus </a>
                </td>
            </tr>
                <?php } ?>
        </tbody>
           
            
    </table>
  </div>
</div>

</div>