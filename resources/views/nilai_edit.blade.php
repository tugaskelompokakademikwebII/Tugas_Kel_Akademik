@extends('layouts.akademiktmplt')

@section('isinya')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Nilai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Edit Nilai Siswa</h1>
        <form action="{{ url('Nilai/'.$nilai->id, []) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Dropdown Nama Siswa -->
            <div class="mb-3">
                <label for="siswa_id" class="form-label">Nama Siswa</label>
                <select name="siswa_id" id="siswa_id" class="form-control">
                    <option value="" disabled>Pilih Siswa</option>
                    @foreach ($list_siswa as $id => $nama_siswa)
                        <option value="{{ $id }}" {{ $id == $nilai->siswa_id ? 'selected' : '' }}>{{ $nama_siswa }}</option>
                    @endforeach
                </select>
                @if ($errors->has('siswa_id'))
                    <span class="text-danger">{{ $errors->first('siswa_id') }}</span>
                @endif
            </div>

            <!-- Dropdown Mata Pelajaran -->
            <div class="mb-3">
                <label for="mapel_id" class="form-label">Mata Pelajaran</label>
                <select name="mapel_id" id="mapel_id" class="form-control">
                    <option value="" disabled>Pilih Mata Pelajaran</option>
                    @foreach ($list_mapel as $id => $nama_mp)
                        <option value="{{ $id }}" {{ $id == $nilai->mapel_id ? 'selected' : '' }}>{{ $nama_mp }}</option>
                    @endforeach
                </select>
                @if ($errors->has('mapel_id'))
                    <span class="text-danger">{{ $errors->first('mapel_id') }}</span>
                @endif
            </div>

            <!-- Input Nilai -->
            <div class="mb-3">
                <label for="nilai" class="form-label">Nilai</label>
                <input type="number" name="nilai" id="nilai" class="form-control" min="10" max="100" value="{{ old('nilai', $nilai->nilai) }}" required>
                @if ($errors->has('nilai'))
                    <span class="text-danger">{{ $errors->first('nilai') }}</span>
                @endif
            </div>

            <!-- Button Submit -->
            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
</body>
</html>
@endsection
