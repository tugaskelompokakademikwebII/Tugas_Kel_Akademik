@extends('layouts.akademiktmplt')

@section('isinya')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Data Administrasi</div>
                <div class="card-body">
                    <form action="{{ route('Administrasi.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input id="tanggal" class="form-control" type="date" name="tanggal" value="{{ old('tanggal') }}">
                            <script>
                                document.getElementById("tanggal").valueAsDate = new Date();
                            </script>
                            <span class="text-danger">{{ $errors->first('tanggal') }}</span>
                        </div>

                        <div class="form-group">
                            <label for="siswa_id">Siswa</label>
                            <select id="siswa_id" class="form-control" name="siswa_id">
                                <option value="">Pilih Siswa</option>
                                @foreach ($list_siswa as $id => $tampil)
                                    <option value="{{ $id }}" @selected($id == old('siswa_id'))>{{ $tampil }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('siswa_id') }}</span>
                        </div>

                        <div class="form-group">
                            <label for="guru_id">Nama Wali Kelas/Guru</label>
                            <select name="guru_id" id="guru_id" class="form-control">
                                <option value="">Pilih Guru</option>
                                @foreach ($list_Guru as $id => $nama)
                                    <option value="{{ $id }}" {{ old('guru_id', $administrasi->guru_id ?? '') == $id ? 'selected' : '' }}>
                                        {{ $nama }}
                                    </option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('guru_id') }}</span>
                        </div>
                        
                        <div class="form-group">
                            <label for="mapel_id">Kelas</label>
                            <select id="mapel_id" class="form-control" name="mapel_id">
                                <option value="">Pilih Kelas</option>
                                @foreach ($list_mapel as $id => $tampil)
                                    <option value="{{ $id }}" @selected($id == old('mapel_id'))>{{ $tampil }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('mapel_id') }}</span>
                        </div>

                        <div class="form-group">
                            <label for="biaya">Biaya SPP</label>
                            <input id="biaya" class="form-control" type="number" name="biaya" value="{{ old('biaya') }}">
                            <span class="text-danger">{{ $errors->first('biaya') }}</span>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
