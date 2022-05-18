
<div class="col-lg-6">
<div class="card">
  <div class="card-header">
    TAMBAH DATA
  </div>
  <div class="card-body">
    <form action="?page=user/proses.php" method="POST">
        <div class="form-group">
            <label >Nama Lengkap</label>
            <input type="nama" name ="naleng" class="form-control"  >
        </div>
        <div class="form-group">
            <label >Username</label>
            <input type="nama" name ="username" class="form-control"  >
        </div>
        <div class="form-group">
            <label >Password</label>
            <input type="password" name ="password" class="form-control"  >
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