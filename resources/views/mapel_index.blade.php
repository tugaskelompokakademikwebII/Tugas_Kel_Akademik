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

                <form class="d-flex" role="search" method="get"
                    action="{{ url('Siswa/cari/data', []) }}">

                    <input class="form-control me-2" type="search" placeholder="Cari Pelajaran..." aria-label="Search"
                        name="search"> &nbsp;

                    <button class="btn btn-outline-success" type="submit">Cari</button>

                </form>
            </div>
            <div class="card" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
                <div class="card-header" style="background-color: #007bff; color: white; font-weight: bold; text-align: center;">
                    {{ $Judul }}
                </div>
                <div class="card-body" style="padding: 20px;">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover" style="width: 100%; margin: 0 auto; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); border-radius: 5px; overflow: hidden; text-align: center;">
                            <thead style="background-color: #000000; font-weight: bold; text-align: center;">
                            <tr>
                                <th>ID</th>
                                <th>Kode Mapel</th>
                                <th>Mata Pelajaran</th>
                                <th>Jadwal</th>
                                <th>Kelas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Mapel as $a)
                            <tr style="transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='#fbffb6';" onmouseout="this.style.backgroundColor='#fbffb6';">
                                <td>{{ $a->id }}</td>
                                <td>{{ $a->kode_mp }}</td>
                                <td>{{ $a->nama_mp }}</td>
                                <td>{{ $a->jadwal }}</td>
                                <td>{{ $a->kelas }}</td>
                                
                               
    
                                <td>  <a href="{{ url('Mapel/'.$a->id.'/edit',[]) }}"
                                    class="btn btn-primary btn-sm">Edit</a>

                                <form action="{{ url('Mapel/'.$a->id,[]) }}"method="post" class="d-inline"
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
                    {{ $Mapel->links() }}
    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection