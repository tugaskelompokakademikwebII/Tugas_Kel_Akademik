
<!DOCTYPE html>
<html lang="en">
    @extends('layouts.akademiktmplt')
    @section('isinya')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Informasi Jadwal Pelajaran</title>

</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #ffffff;
    }

    h2 {
        margin: 20px 0;
        font-size: 24px;
        color: #000000;
        font-weight: bold;
    }

    table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        margin: 20px 0;
        background-color: #00ff2f;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(30, 251, 255, 0.944);
    }

    table th, table td {
        text-align: center;
        padding: 10px;
        font-size: 14px;
    }

    table th {
background-color: #0994ff !important;
color: #000000 !important;
border-bottom: 1px solid #dee2e6 !important;
font-weight: bold !important;
}

    table td {
        background-color: #08a5ff;
    }

   

    table tbody tr:hover td {
        background-color: hsl(68, 100%, 70%);
    }

    h5 {
        text-align: left;
        margin-top: 20px;
        font-weight: bold;
    }

    .container-fluid {
        padding: 20px;
    }

    .row {
        margin-top: 20px;
    }
</style>
<body>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <center>
                    <h2>{{ $Judul }}</h2>
                </center>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Kode Mapel</th>
                            <th>Mata Pelajaran</th>
                            <th>Jadwal</th>
                            <th>Kelas</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Mapel as $a)
                        <tr>
                            <td>{{ $a->id }}</td>
                            <td>{{ $a->kode_mp }}</td>
                            <td>{{ $a->nama_mp }}</td>
                            <td>{{ $a->jadwal }}</td>
                            <td>{{ $a->kelas }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <h5>Mengetahui</h5>
                <br>
                <br>
                <br>
                <h5>Admin</h5>
            </div>
        </div>
    </div>
</body>
@endsection
</html>
