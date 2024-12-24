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
                    Tambah Mata Pelajaran
                    <div class="card-body">
                        <form action="{{ route('Mapel.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="kode_mp">Kode Pelajaran</label>
                                <input id="kode_mp" class="form-control" type="text" name="kode_mp" value="{{ old('kode_mp') }}">
                                <span class="text-danger">{{ $errors->first('kode_mp') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="nama_mp">Kelas</label>
                                <select id="nama_mp" class="form-control" name="nama_mp">
                                    @foreach ($list_mp as $a)
                                    <option value="{{ $a }}" @selected($a == old('nama_mp'))>{{ $a }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->first('nama_mp') }}</span>
                            </div>
                           
                        <div class="form-group">
                            <label for="jadwal">Jam Pelajaran</label>
                            <input 
                                type="datetime-local" 
                                id="jadwal" 
                                class="form-control" 
                                name="jadwal" 
                                value="{{ old('jadwal') }}">
                            <span class="text-danger">{{ $errors->first('jadwal') }}</span>
                        </div>
                        
                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <select id="kelas" class="form-control" name="kelas">
                                @foreach ($list_kls as $a)
                                <option value="{{ $a }}" @selected($a == old('kelas'))>{{ $a }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('kelas') }}</span>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                    
            </div>

        </div>
    </div>
</div>
</div>
@endsection
