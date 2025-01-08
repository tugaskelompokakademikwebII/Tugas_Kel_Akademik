@extends('layouts.akademiktmplt')

@section('isinya')
<div class="container">
    <h3>Laporan Nilai Semua Siswa</h3>
    @foreach ($siswas as $siswa)
        <div class="card mb-4">
            <div class="card-header">
                <strong>Nama Siswa: </strong>{{ $siswa->nama_siswa }}
            </div>
            <div class="card-body">
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
                        @foreach ($siswa->nilais as $index => $nilai)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $nilai->mapels->nama_mp ?? 'Data tidak tersedia' }}</td>
                                <td>{{ $nilai->nilai }}</td>
                                <td>{{ $nilai->predikat }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endforeach
</div>
@endsection
