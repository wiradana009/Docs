
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content = "width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf_token" content="{{ csrf_token() }}">
  <style>
      table.static{
          position: relative; 
          border:1px solid #543535 ;
      }
  </style>
  <title>Medical Report PSN{{ $ps->id }}</title>
  
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <div class="content">
     
      <form style="padding-left: 50px">
        {{ csrf_field() }}

        <table  class="table table-boardered" style="width: 40%">
          <tr>
            <th align="right"><img class="img-circle img-bordered-sm" src="{{asset('AdminLTE/dist/img/avatar.png')}}" alt="user image" style="width:100;height:100px;"></th>
            <th align="left"><h1>Cemerlang Jaya Segar</h1></th>
            <th></th>
            
          </tr>
          <td>
          </td>
        </table>
        
        <table align="center" class="table table-boardered" style="width: 95%">
          
            <td>
              <div class="form-group">
                <p>ID Pasien : <code>{{ $ps->id }}</code></p>
                <p>Nama Pasien : <code>{{ $ps->nama }}</code></p>
                <p>Alamat Pasien : <code>{{ $ps->alamat }}</code></p>
                <p>Tempat & Tgl Lahir : <code>{{ $ps->tempat_lahir }} , {{ $ps->tgl_lahir }}</code></p>
                <p>Jenis Kelamin : <code>{{ $ps->gender }}</code></p>
                <p>Telp/Email : <code>{{ $ps->phone_email }}</code></p>
              </div>

            </td>
            <td>
              <div class="form-group">
                <p>ID Lab : <code>LAB-{{ $dtPasienP[0]->id }}</code></p>
                <p>Nama Dokter : <code>{{ $ps->nama }}</code></p>                
              </br>               
                <p>Tgl Periksa : <code>{{ date('d-m-Y', strtotime($dtPasienP[0] -> tgl_periksa)) }}</code></p>
                <p>Type Activity : <code>{{ $dtPasienP[0]->acty_type  }}</code></p>
              </div>
            </td>
          

      </table>
        
       

        
      </form>

           
    
      <table align="center" class="table table-boardered" style="width: 95%">
          <tr style="background-color: rgb(147, 166, 224)">
              <th>#</th>
              <th>Nama Activity</th>
              <th>Units</th>
              <th>Result</th>
              <th>Interval Ranges</th>
              <th>Desc</th>
          </tr>
          @foreach ($dtPasienP as $item)
          <tr>
           
              <td align="center">{{$loop->iteration}}</td>
              <td align="center">{{ $item -> acty_name }}</td>
              <td align="center">{{ $item -> units }}</td>
              <td align="center">{{ $item -> result }}</td>
              <td align="center">{{ $item -> interval_ranges }}</td>
              <td align="center">{{ $item -> desc }}</td>
              
             
          </tr>    
          @endforeach

      </table>

       



    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer style="padding-top: 150px; padding-left: 50px;">
    {{-- <a href="{{url('download-pdf2', $ps->id)}}" class="btn btn-info" role="button">>>Cetak</a> --}}
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
@include('Template.script')
</body>
</html>
