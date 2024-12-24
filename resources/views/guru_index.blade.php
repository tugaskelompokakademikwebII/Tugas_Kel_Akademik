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
            <div class="card" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
                <div class="card-header" style="background-color: #007bff; color: white; font-weight: bold; text-align: center;">
                    {{ $Judul }}
                </div>
                <div class="card-body" style="padding: 20px;">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover" style="width: 100%; margin: 0 auto; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); border-radius: 5px; overflow: hidden; text-align: center;">
                            <thead style="background-color: #fbffb6; font-weight: bold; text-align: center;">
                                <tr>
                                    <th style="width: 5%;">ID</th>
                                    <th style="width: 10%;">NIK</th>
                                    <th style="width: 20%;">Nama Guru</th>
                                    <th style="width: 15%;">Bidang</th>
                                    <th style="width: 10%;">Jenis Kelamin</th>
                                    <th style="width: 15%;">Nomor HP</th>
                                    <th style="width: 20%;">Alamat</th>
                                    <th style="width: 15%;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Guru as $a)
                                <tr style="transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='#e8f4ff';" onmouseout="this.style.backgroundColor='white';">
                                    <td>{{ $a->id }}</td>
                                    <td>{{ $a->kode_guru }}</td>
                                    <td>{{ $a->nama_guru }}</td>
                                    <td>{{ $a->bidang }}</td>
                                    <td>{{ $a->jk }}</td>
                                    <td>{{ $a->nomorhp_guru }}</td>
                                    <td>{{ $a->alamat_guru }}</td>
                                    <td>
                                        <a href="{{ url('Guru/'.$a->id.'/edit',[]) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ url('Guru/'.$a->id,[]) }}" method="post" class="d-inline" onsubmit="return confirm('Apakah Dihapus?')">
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
                </div>
                <div class="card-footer" style="text-align: center;">
                    {{ $Guru->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
