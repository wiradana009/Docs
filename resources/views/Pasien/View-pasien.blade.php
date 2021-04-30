
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
              <li class="breadcrumb-item active">Data Pasien</li>
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
              <h3>Edit Data Pasien</h3>
            </div>
        

            <div class="card-body">
               <form action="{{url('update-pasien', $ps->id)}}" method="post">
                 {{ csrf_field() }}
                 <div class="col-sm-6">
                    <div class="form-group">
                      <p>Nama Pasien : <code>{{ $ps->id }}</code></p>
                      <p>Nama Pasien : <code>{{ $ps->nama }}</code></p>
                      <p>Alamat Pasien : <code>{{ $ps->alamat }}</code></p>
                      <p>Tempat & Tgl Lahir : <code>{{ $ps->tempat_lahir }} , {{ $ps->tgl_lahir }}</code></p>
                      <p>Jenis Kelamin : <code>{{ $ps->gender }}</code></p>
                      <p>Telp/Email : <code>{{ $ps->phone_email }}</code></p>
                    
                      <div class="form-group">
                        {{-- <button type="submit" class="btn btn-primary">Update</button> --}}
                      </div>
                    </div>
                 </div>
               </form>

                    
             
               <table class="table table-boardered">
                   <tr style="background-color: rgb(147, 166, 224)">
                       <th>#</th>
                       <th>Nama Activity</th>
                       <th>Type Activity</th>
                       <th>Units</th>
                       <th>Result</th>
                       <th>Interval Ranges</th>
                       <th>Desc</th>
                       <th>Tgl Periksa</th>
                       {{-- <th>Action</th> --}}
                   </tr>
                   @foreach ($dtLaboratory as $item)
                   <tr>
                    
                       <td>{{$loop->iteration}}</td>
                       <td>{{ $item -> acty_name }}</td>
                       <td>{{ $item -> acty_type }}</td>
                       <td>{{ $item -> units }}</td>
                       <td>{{ $item -> result }}</td>
                       <td>{{ $item -> interval_ranges }}</td>
                       <td>{{ $item -> desc }}</td>
                       <td>{{ date('d-m-Y', strtotime($item -> tgl_periksa)) }}</td>
                       
                       {{-- <td>
                           <a href="#"><i class="fas fa-file-pdf"> Cetak</i></a> 
                       </td> --}}
                   </tr>    
                   @endforeach

               </table>


             </br>

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
