
<div class="col-lg-6">
<div class="card">
  <div class="card-header">
    FORM EDIT DATA
  </div>
  <div class="card-body">
             <?php
                include 'include/koneksi.php';

                $tangkap_id = $_GET['id'];
                $sql = mysqli_query($db,"SELECT * FROM tb_user WHERE id_user='$tangkap_id'");
               $ambil_data = mysqli_fetch_assoc($sql);
                    //variabel harus sesuai dengan database
                    $id_user=$ambil_data['id_user'];
                    $naleng=$ambil_data['naleng'];
                    $username=$ambil_data['username'];
                    $pwd_user=$ambil_data['pwd_user'];
                    $level_user=$ambil_data['level_user'];

            ?>
    <form action="?page=user/proses_edit.php" method="POST">
        <input type="hidden" name="id" value="<?= $id_user ?>">
        <div class="form-group">
            <label >Nama Lengkap</label>
            <input type="nama" name ="naleng" class="form-control" value="<?= $naleng ?> ">
        </div>
        <div class="form-group">
            <label >Username</label>
            <input type="nama" name ="username" class="form-control" value="<?= $username ?>" >
        </div>
        <div class="form-group">
            <label >Password</label>
            <input type="password" name ="password" class="form-control"  value="<?= $pwd_user ?>">
        </div>
        <div class="form-group">
            <label>Level User</label>
            <select name="level" class="form-control" id="">
                <option value="admin">Administrator</option>
                <option value="author">author</option>
                <option value="editor">Editor</option>
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
</div>