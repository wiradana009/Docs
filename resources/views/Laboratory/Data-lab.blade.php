
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
              <h1 class="m-0">Halaman Lab</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <form class="form-inline my-2 my-lg-0" method="GET" action="{{route('search-lab')}}">
                  <div class="input-group input-group-lg">
                    <input type="search" name="search" class="form-control form-control-lg" placeholder="Cari Data Pasien" >
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-lg btn-default">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                  </div>
                </form>
                

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
                <div class="card-tools">
                  <a href="{{route('create-lab')}}" class="btn btn-success" >Tambah Data  <i class="fas fa-plus-square"></i></a>
                </div>
            </div>

            <div class="card-body">   
              @if (isset($search_text))
                <label>"hasil pencarian lab : {{ $search_text }} "</label>  
              @endif        
              
                <table class="table table-boardered">
                    <tr style="background-color: rgb(147, 166, 224)">
                        <th>#</th>
                        <th>Pasien</th>
                        <th>Dokter</th>
                        <th>Nama Activity</th>
                        <th>Type Activity</th>
                        <th>Units</th>
                        <th>Result</th>
                        <th>Interval Ranges</th>
                        <th>Desc</th>
                        <th>Tgl Periksa</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($dtLaboratory as $item)
                    <tr>
                     
                        <td>{{$loop->iteration}}</td>
                        <td>PSN{{ $item->pasien['id']}}  -  {{ $item->pasien['nama']}}  </td>
                        <td>{{ $item ->staff['nama']}}</td>
                        <td>{{ $item ->acty_name }}</td>
                        <td>{{ $item ->acty_type }}</td>
                        <td>{{ $item ->units }}</td>
                        <td>{{ $item ->result }}</td>
                        <td>{{ $item ->interval_ranges }}</td>
                        <td>{{ $item ->desc }}</td>
                        <td>{{ date('d-m-Y', strtotime($item -> tgl_periksa)) }}</td>
                        
                        <td>
                            {{-- <a href="{{url('edit-lab', $item->id)}}"><i class="fas fa-edit"></i></a> 
                            | 
                            <a href="{{url('delete-lab', $item->id)}}"><i class="fas fa-trash-alt" style="color: red"></i></a>
                            | --}}
                            {{-- {{url('download-pdf2', $ps->id)}} --}}
                            <a href="{{url('download-pdf2', $item->pasien_id)}}" target="_blank"><i class="fas fa-file-pdf"> Cetak</i></a>
                            {{-- <a href="{{url('view-pasien-report', $item->pasien_id)}}" target="_blank"><i class="fas fa-eye"></i></a> --}}
                        </td>
                    </tr>    
                    @endforeach

                </table>


              </br>

                
            </div>    
        </div>
    </div>
    <!-- /.content -->

    <div class="card-footer">
      
      {{$dtLaboratory->links('pagination::bootstrap-4')}} 
      
    </div>
    
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
@include('sweetalert::alert')
</body>
</html>
