@extends('layouts.akademiktmplt')
@section('isinya')
<style>
    table tbody tr:hover td {
       background-color: hsl(117, 100%, 90%);
   }

</style>
<div class="container-fluid" style="padding: 20px;">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">

                <form class="d-flex" role="search" method="get"
                    action="{{ url('Siswa/cari/data', []) }}">

                    <input class="form-control me-2" type="search" placeholder="Cari Siswa..." aria-label="Search"
                        name="search"> &nbsp;

                    <button class="btn btn-outline-success" type="submit">Cari</button>

                </form>
            </div>

            <div class="card" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
                <div class="card-header" style="background-color: #ada620; color: white; font-weight: bold; text-align: center;">
                    {{ $Judul }}
                </div>
            </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped table-hover">
                        <thead style="background-color: #000000; font-weight: bold; text-align: center;">
                            <tr>
                                <th>ID</th>
                                <th>NIK</th>
                                <th>Nama Siswa</th>
                                <th>TanggalLahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>Nomor Hp</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Siswa as $a)
                            <tr style="transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='#fbffb6';" onmouseout="this.style.backgroundColor='#fbffb6';">
                                <td>{{ $a->id }}</td>
                                <td>{{ $a->kode_siswa }}</td>
                                <td>{{ $a->nama_siswa }}</td>
                                <td>{{ $a->tanggal_lahir }}</td>
                                <td>{{ $a->jk }}</td>
                                <td>{{ $a->alamat_siswa }}</td>
                                <td>{{ $a->nomorhp_siswa }}</td>
                               
    
                                <td>  <a href="{{ url('Siswa/'.$a->id.'/edit',[]) }}"
                                    class="btn btn-primary btn-sm">Edit</a>

                                <form action="{{ url('Siswa/'.$a->id,[]) }}"method="post" class="d-inline"
                                    onsubmit="return confirm('Apakah Dihapus?')">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>

                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    {{ $Siswa->links() }}
    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection