<<<<<<< HEAD
@extends('layouts.akademiktmplt')
@section('isinya')
=======
@extends('layouts.app')
@section('content')
>>>>>>> f4e61944f63fd80786e8c81a824bdf544359ec7b
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Edit Data Siswa
                </div>
                <div class="card-body">
                    <form action="{{ url('Siswa/'.$Siswa->id, []) }}" method="POST">

                        @method('PUT')
                        @csrf

                        <div class="form-group">
                            <label for="kode_siswa">Nomor Induk Siswa </label>
                            <input id="kode_siswa" class="form-control" type="text" name="kode_siswa"
                                value="{{ $Siswa->kode_siswa ?? old('kode_siswa') }}">
                            <span class="text-danger">{{ $errors->first('kode_siswa') }}</span>
                        </div>

                        <div class="form-group">
                            <label for="nama_siswa">Nama Siswa</label>
                            <input id="nama_siswa" class="form-control" type="text" name="nama_siswa"
                                value="{{ $Siswa->nama_siswa ?? old('nama_siswa') }}">
                            <span class="text-danger">{{ $errors->first('nama_siswa') }}</span>
                        </div>
                     


                        <div class="form-group">
                            <label for="alamat_siswa">Alamat</label>
                            <input id="alamat_siswa" class="form-control" type="text" name="alamat_siswa"
                                value="{{ $Siswa->alamat_siswa ?? old('alamat_siswa') }}">
                            <span class="text-danger">{{ $errors->first('alamat_siswa') }}</span>
                        </div>

                        <div class="form-group">
                            <label for="nomorhp_siswa">Nomor HP</label>
                            <input id="nomorhp_siswa" class="form-control" type="text" name="nomorhp_siswa"
                                value="{{ $Siswa->nomorhp_siswa ?? old('nomorhp_siswa') }}">
                            <span class="text-danger">{{ $errors->first('nomorhp_siswa') }}</span>
                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
