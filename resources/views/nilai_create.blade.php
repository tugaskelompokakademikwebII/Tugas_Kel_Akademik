@extends('layouts.akademiktmplt')

@section('isinya')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Data Nilai</div>
                <div class="card-body">
                    <form action="{{ route('nilai.store') }}" method="POST">
                        @csrf

                       

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
                            <label for="mapel_id">Pelajaran</label>
                            <select id="mapel_id" class="form-control" name="mapel_id">
                                <option value="">Pilih Pelajaran</option>
                                @foreach ($list_mapel as $id => $tampil)
                                    <option value="{{ $id }}" @selected($id == old('mapel_id'))>{{ $tampil }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('mapel_id') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="predikat">Predikat</label>
                            <select id="predikat" class="form-control" name="predikat">
                                <option value="">Masukan Predikat</option>
                                @foreach ($list_predikat as $id => $tampil)
                                    <option value="{{ $id }}" @selected($id == old('predikat'))>{{ $tampil }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('predikat') }}</span>
                        </div>
                        


                        <div class="form-group">
                            <label for="nilai">Nilai</label>
                            <input id="nilai" class="form-control" type="number" name="nilai" value="{{ old('nilai') }}">
                            <span class="text-danger">{{ $errors->first('nilai') }}</span>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
