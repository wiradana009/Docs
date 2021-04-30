
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  @include('Template.head')
  
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
 @include('Template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('Template.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Starter Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Staff</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
     
        <div class="card card-info card-outline">
            <div class="card-header">
              <h3>Create Data Staff</h3>
            </div>
        

            <div class="card-body">
               <form action="{{route('simpan-staff')}}" method="post">
                 {{ csrf_field() }}
                 <div class="col-sm-6">
                    <div class="form-group">
                    <label>Nama</label>
                      <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Staff">
                    </div>

                    <div class="form-group">
                      <label>Alamat</label>
                      <textarea class="form-control" name="alamat" id="alamat" rows="3" placeholder="Alamat ..."></textarea>
                    </div>

                 </div>


                 <div class="row">
                  <div class="col-sm-2">
                    <!-- textarea -->
                    <div class="form-group">
                      <label>Tempat Lahir</label>
                      <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>Tgl. Lahir</label>
                      <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" placeholder="tgl_lahir">
                    </div>
                   </div>
                </div>

                 

                 <div class="col-sm-2">
                  <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select class="custom-select rounded-0" id="gender" name="gender">
                      <option>Pria</option>
                      <option>Wanita</option>
                    </select>
                  </div>
                 </div>

                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Telp/Email</label>
                    <input type="text" id="phone_email" name="phone_email" class="form-control" placeholder="Telp. / Email">
                  </div>
  
                  <div class="form-group">
                    <button type="submit" class="btn btn-success">Simpan</button>
                  </div>
                </div>
                

               </form>

            </div> 
            



        </div>



    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
   @include('Template.footer')
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
@include('Template.script')
</body>
</html>
