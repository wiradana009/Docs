<!DOCTYPE html>
<html>
<head>
<title>Cetak</title>
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
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Laporan Pasien</b></p>

        <p>Nama Pasien : <code>asas</code></p>


        <table class="static" align="center" rules="all" border="1px" style="width: 95%">
            <tr style="background-color: rgb(147, 166, 224)">
                <th>#</th>
                <th>ID Pasien</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tempat Lahir</th>
                <th>Tgl. Lahir</th>
                <th>Gender</th>
                <th>Telp</th>
            </tr>

            @foreach ($dtPasienP as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>PSN{{ $item -> id }}</td>
                        <td>{{ $item -> nama }}</td>
                        <td>{{ $item -> alamat }}</td>
                        <td>{{ $item -> tempat_lahir }}</td>
                        <td>{{ date('d-m-Y', strtotime($item -> tgl_lahir)) }}</td>
                        <td>{{ $item -> gender }}</td>
                        <td>{{ $item -> phone_email }}</td>
                     
                    </tr>    
                    @endforeach

        </table>

    </div>


</body>
</html>
