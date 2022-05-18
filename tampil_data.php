<div class="col-lg-12">
<div class="card">
  <div class="card-header">
    DATA USER
  </div>
  <div class="card-body">
      <a href="?page=user/form_user.php" class="btn btn-primary mb-3">Add</a>
    <table class="table table-bordered table-hover">
        <thead>
            <tr class="bg-primary text-light">
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Username</th>
                <th>Password</th>
                <th>Level</th>
                <th>Action</th>
               
            </tr>
        </thead>
        <tbody>
        
        <?php
                include 'include/koneksi.php';
                $sql = mysqli_query($db,"SELECT * FROM tb_user ORDER BY id_user ASC");
                $no=1;
                while ($ambil_data = mysqli_fetch_assoc($sql)) {
                  
                    //variabel harus sesuai dengan database
                    $id_user=$ambil_data['id_user'];
                    $naleng=$ambil_data['naleng'];
                    $username=$ambil_data['username'];
                    $pwd_user=$ambil_data['pwd_user'];
                    $level_user=$ambil_data['level_user'];

            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $naleng ?></td>
                <td><?= $username ?></td>
                <td><?= $pwd_user ?></td>
                <td><?= $level_user ?></td>
                <td>
                    <!--  &id=<?= $id_user ?> -> menghapus data berdasarkan id usernya-->
                    <a href="?page=user/hapus.php&id=<?= $id_user ?>" class="btn btn-warning" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')"> Hapus </a>
                    <a href="?page=user/edit.php&id=<?= $id_user ?>" class="btn btn-primary"> Edit </a>
                </td>
            </tr>
                <?php } ?>
        </tbody>
           
            
    </table>
  </div>
</div>


</div>