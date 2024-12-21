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
                                <th>Nama Guru</th>
                                <th>Bidang</th>
                                <th>Jenis Kelamin</th>
                                <th>Nomor Hp</th>
                                <th>Alamat</th>
                                
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Guru as $a)
                            <tr>
                                <td>{{ $a->id }}</td>
                                <td>{{ $a->kode_guru }}</td>
                                <td>{{ $a->nama_guru }}</td>
                                <td>{{ $a->bidang }}</td>
                                <td>{{ $a->jk }}</td>
                                <td>{{ $a->nomorhp_guru }}</td>
                                <td>{{ $a->alamat_guru }}</td>
    
                                <td>  <a href="{{ url('Guru/'.$a->id.'/edit',[]) }}"
                                    class="btn btn-primary btn-sm">Edit</a>

                                <form action="{{ url('Guru/'.$a->id,[]) }}"method="post" class="d-inline"
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
                    {{ $Guru->links() }}
    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection