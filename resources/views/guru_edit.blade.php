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
                    Edit Data Guru
                </div>
                <div class="card-body">
                    <form action="{{ url('Guru/'.$Guru->id, []) }}" method="POST">

                        @method('PUT')
                        @csrf

                        <div class="form-group">
                            <label for="kode_guru">Nomor Induk Pegawai </label>
                            <input id="kode_guru" class="form-control" type="text" name="kode_guru"
                                value="{{ $Guru->kode_guru ?? old('kode_guru') }}">
                            <span class="text-danger">{{ $errors->first('kode_guru') }}</span>
                        </div>

                        <div class="form-group">
                            <label for="nama_guru">Nama Guru</label>
                            <input id="nama_guru" class="form-control" type="text" name="nama_guru"
                                value="{{ $Guru->nama_guru ?? old('nama_guru') }}">
                            <span class="text-danger">{{ $errors->first('nama_guru') }}</span>
                        </div>

                        <div class="form-group">
                            <label for="bidang">Bidang</label>
                            <select id="bidang" class="form-control" name="bidang">
                                @foreach ($list_bd as $a)
                                <option value="{{ $a }}" @selected($a == $Guru->bidang)>{{ $a }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('bidang') }}</span>
                        </div>
<<<<<<< HEAD
                        <div class="form-group">
                            <label for="jk">Jenis Kelamin</label>
                            <select id="jk" class="form-control" name="jk">
                                @foreach ($list_jk as $a)
                                <option value="{{ $a }}" @selected($a == $Guru->jk)>{{ $a }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('jk') }}</span>
                        </div>
=======
>>>>>>> f4e61944f63fd80786e8c81a824bdf544359ec7b


                        <div class="form-group">
                            <label for="alamat_guru">Alamat</label>
                            <input id="alamat_guru" class="form-control" type="text" name="alamat_guru"
                                value="{{ $Guru->alamat_guru ?? old('alamat_guru') }}">
                            <span class="text-danger">{{ $errors->first('alamat_guru') }}</span>
                        </div>

                        <div class="form-group">
                            <label for="nomorhp_guru">Nomor HP</label>
                            <input id="nomorhp_guru" class="form-control" type="text" name="nomorhp_guru"
                                value="{{ $Guru->nomorhp_guru ?? old('nomorhp_guru') }}">
                            <span class="text-danger">{{ $errors->first('nomorhp_guru') }}</span>
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
