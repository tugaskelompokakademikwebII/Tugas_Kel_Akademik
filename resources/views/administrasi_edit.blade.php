<<<<<<< HEAD
@extends('layouts.akademiktmplt')

@section('isinya')
=======
@extends('layouts.app') 

@section('content') 
>>>>>>> f4e61944f63fd80786e8c81a824bdf544359ec7b
<div class="container-fluid">     
    <div class="row justify-content-center">         
        <div class="col-md-12">             
            <div class="card">                 
                <div class="card-header">                     
                    Edit data Administrasi                 
                </div>                 
                <div class="card-body">                     
                    <form action="{{ url('Administrasi/'.$administrasi->id) }}" method="POST">                          
                        @method('PUT')                         
                        @csrf
                         
                        <div class="form-group">                             
                            <label for="tanggal">Tanggal</label>                             
                            <input id="tanggal" class="form-control" type="date" 
                                   name="tanggal" 
                                   value="{{ $administrasi->tanggal ? date('Y-m-d', strtotime($administrasi->tanggal)) : old('tanggal') }}">                         
                        </div>

                        <div class="form-group">                             
                            <label for="Siswa">Pilih Siswa</label>                             
                            <select id="Siswa" class="form-control" name="siswa_id">
                                <option value="">Pilih Siswa</option>
                                @foreach ($list_siswa as $id => $a)                                     
                                    <option value="{{ $id }}" @selected($id == $administrasi->siswa_id)>
                                        {{ $a }}                                     
                                    </option>                                  
                                @endforeach                             
                            </select>                         
                        </div>

                        <div class="form-group">                             
                            <label for="Guru">Pilih WaliKelas/Guru</label>                             
                            <select id="Guru" class="form-control" name="guru_id">
                                <option value="">Pilih WaliKelas/Guru</option>
                                @foreach ($list_Guru as $id => $a)                                     
                                    <option value="{{ $id }}" @selected($id == $administrasi->guru_id)>
                                        {{ $a }}                                     
                                    </option>                                  
                                @endforeach                             
                            </select>                         
                        </div>
                     

                        <div class="form-group">                             
                            <label for="biaya">Biaya</label>                             
                            <input id="biaya" class="form-control" type="number" 
                                   name="biaya" 
                                   value="{{ $administrasi->biaya ?? old('biaya') }}">                             
                            <span class="text-danger">{{ $errors->first('biaya') }}</span>                         
                        </div>                     
                                   
                </div>                 
                <div class="card-footer">                     
                    <button type="submit" class="btn btn-primary">Update</button> 
                </form>                
                </div>             
            </div>          
        </div>     
    </div> 
</div> 
@endsection
