@extends('layouts.app')
<style>
    .biaya-display{
        display: inline-block;
        text-align: right;
        min-width:100px;
    }
</style>
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{ $admn }}
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tanggal</th>
                                    <th>Nama Siswa</th>
                                    <th>Nama Wali Kelas/Guru</th>
                                    <th>Kelas</th>
                                    <th>Biaya SPP</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($administrasi as $a)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ date('d M Y',strtotime($a->tanggal)) }}</td>
                                        <td>{{ $a->Siswa->nama_siswa }}</td>
                                        <td>{{ $a->Guru->nama_guru }}</td>
                                        <td>{{ $a->Mapel->kelas }}</td>
                                        <td>Rp.<span class="biaya-display"></span>{{number_format( $a->biaya,0,',','.') }}</td>
                                        <td>

                                            <a href="{{ url('Administrasi/' . $a->id . '/edit', []) }}"
                                                class="btn btn-primary btn-sm">Edit</a>

                                            <form action="{{ url('administrasi/' . $a->id, []) }}" method="post"
                                                class="d-inline" onsubmit="return confirm('Apakah Dihapus?')">
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

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection