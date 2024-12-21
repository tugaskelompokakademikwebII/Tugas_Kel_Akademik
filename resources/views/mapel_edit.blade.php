@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Edit Mata Pelajaran
                </div>
                <div class="card-body">
                    <form action="{{ url('Mapel/'.$Mapel->id, []) }}" method="POST">

                        @method('PUT')
                        @csrf

                        <div class="form-group">
                            <label for="kode_mp">Kode Pelajaran </label>
                            <input id="kode_mp" class="form-control" type="text" name="kode_mp"
                                value="{{ $Mapel->kode_mp ?? old('kode_mp') }}">
                            <span class="text-danger">{{ $errors->first('kode_mp') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="nama_mp">Mata Pelajaran</label>
                            <select id="nama_mp" class="form-control" name="nama_mp">
                                @foreach ($list_mp as $a)
                                <option value="{{ $a }}" @selected($a == $Mapel->nama_mp)>{{ $a }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('nama_mp') }}</span>
                        </div>

                       
                     


                        <div class="form-group">
                            <label for="jadwal">Jadwal Pelajaran</label>
                            <input id="jadwal" class="form-control" type="datetime-local" name="jadwal"
                                value="{{ $Mapel->jadwal ?? old('jadwal') }}">
                            <span class="text-danger">{{ $errors->first('jadwal') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <select id="kelas" class="form-control" name="kelas">
                                @foreach ($list_kls as $a)
                                <option value="{{ $a }}" @selected($a == $Mapel->kelas)>{{ $a }}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('nama_mp') }}</span>
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
