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
                <div class="panel-heading">Master Dosen </div>
                <div class="panel-body">
                <a class="btn btn-success" href="{{url('/admin/create')}}">Tambah</a><br/><br/>
    <table class="table table-striped table-bordered data">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Usia</th>
        <th>Nomor Telepon</th>
        <th>Email</th>
        <th>User_role</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($users as $user)
      <tr>
        <td>{{$user['name']}}</td>
        <td>{{$user['alamat']}}</td>
        <td>{{$user['usia']}}</td>
        <td>{{$user['no_telepon']}}</td>
        <td>{{$user['email']}}</td>
        <td>{{$user['user_role']}}</td>
        <td>
          <a href="/admin/edit/{{ $user->id }}" class="btn btn-warning">Edit</a> ||
          <a href="/admin/delete/{{ $user->id }}" class="btn btn-danger"> Hapus</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
            </div>
        </section><br>
      </div>
    </div>
  </div>
</body>
  </body>
  @include('home/footer')
  <script type="text/javascript">
    $(document).ready(function() {
    $('.data').DataTable();
  });
</script>

</html>