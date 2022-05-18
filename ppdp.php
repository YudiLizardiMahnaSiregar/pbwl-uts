<div class="col-lg-12">
<div class="card">
  <div class="card-header">
  <b>DATA PENERIMAAN PESERTA DIDIK PINDAHAN
  </div>
  <div class="card-body">
      <a href="?page=ppdp/form_tambah.php" class="btn btn-primary mb-3">Tambah Data</a>
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
                    <th>Kelas</th>
                    <th>Bulan</th>
                    <th>Jumlah Laki Laki</th>
                    <th>Jumlah Perempuan</th>
                    <th>Jumlah Keseluruhan</th>
                    <th>Action</th>
            </tr>
        </thead>
        <tbody>
        
        <?php
                include 'include/koneksi.php';
                // $sql = mysqli_query($db,"SELECT * FROM tb_artikel ORDER BY id_artikel ASC");

                $sql = mysqli_query($db, "SELECT * FROM tb_ppdp ORDER BY id_peserta ASC");
                $no=1;
                while ($ambil_data = mysqli_fetch_assoc($sql)) {
                  
                    //variabel harus sesuai dengan database
                    $id_peserta=$ambil_data['id_peserta'];
                    $kelas= $ambil_data['kelas'];
                    $bulan= $ambil_data['bulan'];
                    $jlh_laki= $ambil_data['jlh_laki'];
                    $jlh_pr= $ambil_data['jlh_pr'];
                    $jumlah_keseluruhan= $jlh_laki+$jlh_pr;

            ?>
            <tr>
            <td><?= $no++ ?></td>
                    <td><?= $kelas ?></td>
                    <td><?= $bulan ?></td>
                    <td><?= $jlh_laki ?></td>
                    <td><?= $jlh_pr ?></td>
                    <td><?= $jumlah_keseluruhan?></td>
                   
                    
                <td>
                    <!--  &id=<?= $id_user ?> -> menghapus data berdasarkan id usernya-->
                    <a href="?page=ppdp/edit.php&id=<?= $id_peserta ?>" class="btn btn-warning"> Edit </a>

                    <a href="?page=ppdp/hapus.php&id=<?= $id_peserta ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')"> Hapus </a>
                </td>
            </tr>
                <?php } ?>
        </tbody>
           
            
    </table>
  </div>
</div>

</div>