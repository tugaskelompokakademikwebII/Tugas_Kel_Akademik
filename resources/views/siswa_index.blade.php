@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ $Judul }}
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
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
                            <tr>
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