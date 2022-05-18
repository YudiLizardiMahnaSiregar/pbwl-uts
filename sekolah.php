<div class="col-lg-12">
<div class="card">
  <div class="card-header">
   <b>DATA SEKOLAH
  </div>
  <div class="card-body">
      <a href="?page=sekolah/form_tambah.php" class="btn btn-primary mb-3">Tambah Data</a>
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
                    <th>Nama Sekolah</th>
                    <th>NPSN</th>
                    <th>Alamat Sekolah</th>
                    <th>Kecamatan</th>
                    <th>NISN</th>
                    <th>NDS</th>
                    <th>Nomor SIOP</th>
                    <th>Tahun Akreditasi</th>
                    <th>Jenjang</th>
                    <th>No.hp </th>
                    <th>Action</th>
            </tr>
        </thead>
        <tbody>
        
        <?php
                include 'include/koneksi.php';
                // $sql = mysqli_query($db,"SELECT * FROM tb_artikel ORDER BY id_artikel ASC");

                $sql = mysqli_query($db, "SELECT * FROM tb_sekolah ORDER BY id_sekolah ASC");
                $no=1;
                while ($ambil_data = mysqli_fetch_assoc($sql)) {
                  
                    //variabel harus sesuai dengan database
                    $id_sekolah=$ambil_data['id_sekolah'];
                    $nama_sekolah= $ambil_data['nama_sekolah'];
                    $npsn= $ambil_data['npsn'];
                    $alamat= $ambil_data['alamat'];
                    $kecamatan= $ambil_data['kecamatan'];
                    $nisn= $ambil_data['nisn'];
                    $nds= $ambil_data['nds'];
                    $siop= $ambil_data['siop'];
                    $akreditasi= $ambil_data['akreditasi'];
                    $jenjang= $ambil_data['jenjang'];
                    $no_hp= $ambil_data['no_hp'];
            ?>
            <tr>
            <td><?= $no++ ?></td>
                    <td><?= $nama_sekolah ?></td>
                    <td><?= $npsn ?></td>
                    <td><?= $alamat ?></td>
                    <td><?= $kecamatan ?></td>
                    <td><?= $nisn ?></td>
                    <td><?= $nds ?></td>
                    <td><?= $siop ?></td>
                    <td><?= $akreditasi ?></td>
                    <td><?= $jenjang?></td>
                    <td><?= $no_hp ?></td>
                   
                    
                <td>
                    <!--  &id=<?= $id_user ?> -> menghapus data berdasarkan id usernya-->
                    <a href="?page=sekolah/edit.php&id=<?= $id_sekolah ?>" class="btn btn-warning"> Edit </a>

                    <a href="?page=sekolah/hapus.php&id=<?= $id_sekolah ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')"> Hapus </a>
                </td>
            </tr>
                <?php } ?>
        </tbody>
           
            
    </table>
  </div>
</div>

</div>