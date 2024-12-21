<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administrasi;
use App\Models\Siswa;
use App\Models\Guru;
use App\Models\Mapel;

class AdministrasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['administrasi']= \App\Models\Administrasi::with(['Guru', 'Siswa','Mapel'])->paginate(3);
        $data['admn']= 'Data-Data administrasi';
        return view('administrasi_index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['list_siswa'] =
        \App\Models\Siswa::selectRaw("id,concat(kode_siswa,'-',nama_siswa)as tampil")
        ->pluck('tampil','id');
        $data['list_Guru'] =
        \App\Models\Guru::selectRaw("id,concat(kode_guru,'-',nama_guru)as tampil")
        ->pluck('tampil','id');
        $data['list_mapel'] =
        \App\Models\Mapel::selectRaw("id,concat(kelas)as tampil")
        ->pluck('tampil','id');
        return view('administrasi_create',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required',
            'guru_id' => 'required',
            'siswa_id' => 'required',
            'mapel_id'=>'required',
            'biaya' => 'required',
        ]);
    
        // Simpan data ke tabel administrasi
       $Administrasi = new \App\Models\Administrasi();
       $Administrasi ->tanggal=$request->tanggal;
       $Administrasi ->siswa_id=$request->siswa_id;
       $Administrasi ->guru_id=$request->guru_id;
       $Administrasi->mapel_id =$request->mapel_id;
       $Administrasi ->biaya=$request->biaya;
       $Administrasi ->save();
        // Redirect kembali ke halaman index dengan pesan sukses
        return back()->with('pesan', 'Data Administrasi berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['administrasi']=\App\Models\Administrasi::findOrFail($id);
        $data['list_siswa']=\App\Models\Siswa::selectRaw("id,concat(kode_siswa,'-',nama_siswa) as tampil")
        ->pluck('tampil','id');
        $data['list_Guru']=\App\Models\Guru::selectRaw("id,concat(kode_guru,'-',nama_guru) as tampil")
        ->pluck('tampil','id');
        $data['list_mapel'] =
        \App\Models\Mapel::selectRaw("id,concat(kelas)as tampil")
        ->pluck('tampil','id');
        return view('administrasi_edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $request->validate([
            'tanggal'=>'required',
            'siswa_id'=>'required',
            'guru_id'=>'required',
           
            'biaya' => 'required'
        ]);

        $administrasi = \App\Models\Administrasi::findOrFail($id);
        $administrasi->tanggal =$request->tanggal;
        $administrasi->siswa_id =$request->siswa_id;
        $administrasi->guru_id =$request->guru_id;
        
        $administrasi->biaya =$request->biaya;
        $administrasi->save();
        return redirect('/Administrasi')->with('pesan','Data sudah di update');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $administrasi = \App\Models\Administrasi::findOrFail($id);
        $administrasi->delete();
        return back()->with('pesan','Data Sudah Dihapus');
    }
    public function laporan()
    {
        $administrasi = Administrasi::with(['Siswa', 'Guru','Mapel'])->get();
    $admn = "Laporan Data Administrasi";
    
    return view('administrasi_laporan', compact('administrasi', 'admn'));
    }
}
