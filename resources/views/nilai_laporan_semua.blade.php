@extends('layouts.akademiktmplt')

@section('isinya')
<div class="container" style="font-family: Arial, sans-serif; margin-top: 20px;">
    <h3 style="text-align: center; margin-bottom: 30px; color: #333;">Laporan Nilai Semua Siswa</h3>
    @foreach ($siswas as $siswa)
        <div class="card mb-4" style="border: 1px solid #ccc; border-radius: 8px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
            <div class="card-header" style="background-color: #00d9ff; border-bottom: 1px solid #ddd; padding: 10px 15px; font-weight: bold; font-size: 16px;">
                <strong>Nama Siswa: </strong>{{ $siswa->nama_siswa }}
            </div>
            <div class="card-body" style="padding: 15px;">
                <table class="table table-bordered" style="width: 100%; border-collapse: collapse; margin-bottom: 0;">
                    <thead style="background-color: #00f2ff;">
                        <tr>
                            <th style="padding: 10px; text-align: center; border: 1px solid #ddd;">No</th>
                            <th style="padding: 10px; text-align: center; border: 1px solid #ddd;">Mata Pelajaran</th>
                            <th style="padding: 10px; text-align: center; border: 1px solid #ddd;">Nilai</th>
                            <th style="padding: 10px; text-align: center; border: 1px solid #ddd;">Grade</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($siswa->nilais as $index => $nilai)
                            <tr>
                                <td style="padding: 10px; text-align: center; border: 1px solid #ddd;">{{ $index + 1 }}</td>
                                <td style="padding: 10px; text-align: center; border: 1px solid #ddd;">{{ $nilai->mapels->nama_mp ?? 'Data tidak tersedia' }}</td>
                                <td style="padding: 10px; text-align: center; border: 1px solid #ddd;">{{ $nilai->nilai }}</td>
                                <td style="padding: 10px; text-align: center; border: 1px solid #ddd;">{{ $nilai->predikat }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endforeach
</div>
@endsection
