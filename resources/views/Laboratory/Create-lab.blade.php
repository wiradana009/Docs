
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
              <li class="breadcrumb-item active">Data Laboratory</li>
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
              <h3>Create Data Lab</h3>
            </div>
        

            <div class="card-body">
              
               <form action="{{route('simpan-lab')}}" method="post">
                 {{ csrf_field() }}

                 <div class="row">
                      
                    <div class="col-4">
                        <div class="form-group">
                            <label>Pasien :</label>
                            <select class="select2" style="width: 100%;" name="pasien_id">
                                <option value="">--pilih pasien--</option>

                                @foreach ($pas as $item)
                                  <option value="{{ $item -> id }}">PSN{{ $item -> id }}  -  {{ $item -> nama }}</option>  
                                @endforeach
                                
                            </select>
                        </div>
                    </div>
                    <div class="col-1">
                    </div>

                    <div class="col-4">
                      <div class="form-group">
                          <label>Dokter :</label>
                          <select class="select2" style="width: 100%;" name="pasien_id">
                              <option value="">--pilih dokter--</option>

                              @foreach ($stf as $item1)
                                <option value="{{ $item1 -> id }}">KES{{ $item1 -> id }}  -  {{ $item1 -> nama }}</option>  
                              @endforeach
                              
                          </select>
                      </div>
                  </div>
                 </div>
              </br>



                 <div class="col-sm-8">
                  <div class="row">
                    <div class="col-sm-8">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Activity Name</label>
                        <input type="text" id="acty_name" name="acty_name" class="form-control" placeholder="Nama Activity">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Type Activity</label>
                        
                        <select class="custom-select rounded-0" id="acty_type" name="acty_type">
                          <option>PCR</option>
                          <option>Reagen</option>
                        </select>
  
                      </div>
                     </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Units</label>
                        <textarea class="form-control" name="units" id="units" rows="3" placeholder="Alamat Pasien ..."></textarea>
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Result</label>
                        <textarea class="form-control" name="result" id="result" rows="3" placeholder="Alamat Pasien ..."></textarea>
                      </div>
                    </div>

                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Interval Ranges</label>
                        <textarea class="form-control" name="interval_ranges" id="interval_ranges" rows="3" placeholder="Alamat Pasien ..."></textarea>
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="desc" id="desc" rows="3" placeholder="Alamat Pasien ..."></textarea>
                      </div>
                    </div>

                  </div>

                 </div>


                 <div class="row">
                
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>Tgl. Periksa</label>
                      <input type="date" id="tgl_periksa" name="tgl_periksa" class="form-control" placeholder="tgl_periksa" value="<?php echo date('Y-m-d'); ?>">
                    </div>
                   </div>
                </div>

                 

                 

                <div class="col-sm-4">
  
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
