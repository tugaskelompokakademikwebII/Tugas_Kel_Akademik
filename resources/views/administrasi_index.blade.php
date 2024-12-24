@extends('layouts.akademiktmplt')
@section('isinya')
<style>
    .biaya-display{
        display: inline-block;
        text-align: right;
        min-width:100px;
    }
</style>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="col-md-4">

                    <form class="d-flex" role="search" method="get"
                        action="{{ url('Siswa/cari/data', []) }}">
    
                        <input class="form-control me-2" type="search" placeholder="Cari Transaksi..." aria-label="Search"
                            name="search"> &nbsp;
    
                        <button class="btn btn-outline-success" type="submit">Cari</button>
    
                    </form>
                </div>
               
                        <div class="card" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
                            <div class="card-header" style="background-color: #3bc51c; color: white; font-weight: bold; text-align: center;">
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