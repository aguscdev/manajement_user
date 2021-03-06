<!DOCTYPE html>
<html>
 @include('home/header')
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    @include('home/sidebar')
    <div class="contents">
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <div class="panel panel-default">
            <div class="panel-heading">Tambah Mahasiswa</div>
            <div class="panel-body">

        		<form method="post" action="/admin/store">
              {{csrf_field()}}
        			<div class="form-group">
        			    <label for="nama">Nama</label>
        			    <input type="text" name="name" class="form-control" id="nama" required>
        			</div>
              <div class="form-group">
                  <label for="alamat">alamat</label>
                  <input type="text" name="alamat" class="form-control" id="alamat" required>
              </div>
        			<div class="form-group">
        			    <label for="usia">Usia</label>
        			    <input type="text" name="usia" class="form-control" id="usia" required>
        			</div>
              <div class="form-group">
                  <label for="no_telepon">No Telepon</label>
                  <input type="text" name="no_telepon" class="form-control" id="no_telepon" required>
              </div>
              <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" class="form-control" id="email" required>
              </div>
              <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control" id="password" required>
              </div>
              <div class="form-group">
                <label for="role">User Role</label>
                    <select name="user_role" class="form-control" >
                      <option value="administrator">Administrator</option>
                      <option value="officer">Officer</option>
                      <option value="User">User</option>
                    </select>
                </div>
              <button type="submit" class="btn btn-info">Simpan</button>
              <a class="btn btn-danger" href="#">Batal</a>
          </form>
        </div>
        </section><br>
      </div>
    </div>
  </div>
</body>
@include('home/footer')
</html>