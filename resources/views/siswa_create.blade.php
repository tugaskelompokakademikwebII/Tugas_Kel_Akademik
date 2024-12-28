@extends('layouts.akademiktmplt')
@section('isinya')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Tambah data Siswa
                <div class="card-body">
                    <form action="{{ route('Siswa.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="kode_siswa">Nomor Induk Siswa</label>
                            <input id="kode_siswa" class="form-control" type="text" name="kode_siswa" value="{{ old('kode_siswa') }}">
                            <span class="text-danger">{{ $errors->first('kode_siswa') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="nama_siswa">Nama Siswa</label>
                            <input id="nama_siswa" class="form-control" type="text" name="nama_siswa" value="{{ old('nama_siswa') }}">
                            <span class="text-danger">{{ $errors->first('nama_siswa') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input 
                                type="date" 
                                id="tanggal_lahir" 
                                class="form-control" 
                                name="tanggal_lahir" 
                                value="{{ old('tanggal_lahir') }}">
                            <span class="text-danger">{{ $errors->first('tanggal_lahir') }}</span>
                        </div>
                        
                        <div class="form-group">
                            <label for="jk">Jenis Kelamin</label>
                            <select id="jk" class="form-control" name="jk">
                                @foreach ($list_jk as $a)
                                <option value="{{ $a }}" @selected($a == old('jk'))>{{ $a }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('jk') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="alamat_siswa">Alamat</label>
                            <input id="alamat_siswa" class="form-control" type="text" name="alamat_siswa" value="{{ old('alamat_siswa') }}">
                            <span class="text-danger">{{ $errors->first('alamat_siswa') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="nomorhp_siswa">No Hp Siswa</label>
                            <input id="nomorhp_siswa" class="form-control" type="text" name="nomorhp_siswa" value="{{ old('nomorhp_siswa') }}">
                            <span class="text-danger">{{ $errors->first('nomorhp_siswa') }}</span>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                    
            </div>

        </div>
    </div>
</div>
</div>
@endsection
