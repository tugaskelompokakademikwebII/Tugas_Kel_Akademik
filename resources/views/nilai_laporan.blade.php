@extends('layouts.akademiktmplt')

@section('isinya')
<div class="col-md-12">
    <h3>Laporan Nilai</h3>
    <table class="table">
        <tr>
            <td><strong>Nama Siswa:</strong></td>
            <td>{{ $siswa->nama_siswa }}</td>
        </tr>
        <tr>
            <td><strong>Kode Siswa:</strong></td>
            <td>{{ $siswa->kode_siswa }}</td>
        </tr>
    </table>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Mata Pelajaran</th>
                <th>Nilai</th>
                <th>Grade</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($nilai as $index => $data)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $data->mapels?->nama_mp ?? 'Tidak Ditemukan' }}</td>

                    <td>{{ $data->nilai }}</td>
                    <td>{{ $data->predikat }}</td> {{-- Pastikan field predikat ada di tabel Nilai --}}
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
