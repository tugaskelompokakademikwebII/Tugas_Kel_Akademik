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
                                <th>Kode Mapel</th>
                                <th>Mata Pelajaran</th>
                                <th>Jadwal</th>
                                <th>Kelas</th>
                                <th>Aksi</th>
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