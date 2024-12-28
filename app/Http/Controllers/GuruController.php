<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $data['Guru']= \App\Models\Guru::paginate(5);
        $data['Judul']= 'Data-Data Guru';
        return view('guru_index',$data);
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['list_bd'] = ['Matematika','Bahasa Indonesia','Bahasa Inggris','IPA','IPS','Olahraga','TIK'];
        $data['list_jk'] = ['Laki-Laki','Perempuan'];
        return view('guru_create',$data);
        
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_guru' => 'required|unique:gurus,kode_guru',
            'nama_guru' => 'required',
            'alamat_guru' => 'required',
            'nomorhp_guru' => 'required',
            'jk' => 'required',
            'bidang' => 'required',
        ]);
        
        $Guru = new \App\Models\Guru();
        $Guru->kode_guru = $request->kode_guru;
        $Guru->nama_guru = $request->nama_guru;
        $Guru->alamat_guru = $request->alamat_guru;
        $Guru->nomorhp_guru = $request->nomorhp_guru;
        $Guru->jk = $request->jk;
        $Guru->bidang = $request->bidang;
        $Guru->save();
        
        return back()->with('pesan','Data sudah disimpan');
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
        $data['Guru']=\App\Models\Guru::findOrFail($id);
        $data['list_bd'] = ['Matematika','Bahasa Indonesia','Bahasa Inggris','IPA','IPS','Olahraga','TIK'];
        $data['list_jk'] = ['Laki-Laki','Perempuan'];
        return view('guru_edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
      
        $request->validate([
            'kode_guru' => 'required|unique:gurus,kode_guru,'.$id,
            'nama_guru' => 'required',
            'alamat_guru' => 'required',
            'nomorhp_guru' => 'required',
            'jk' => 'required',
            'bidang' => 'required',
        ]);
        
        $Guru = \App\Models\Guru::findOrFail($id);
        $Guru->kode_guru = $request->kode_guru;
        $Guru->nama_guru = $request->nama_guru;
        $Guru->alamat_guru = $request->alamat_guru;
        $Guru->nomorhp_guru = $request->nomorhp_guru;
        $Guru->jk = $request->jk;
        $Guru->bidang = $request->bidang;
        $Guru->save();
        
        return back()->with('pesan','Data sudah diupdate');
        
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Guru = \App\Models\Guru::findOrFail($id);
        $Guru->delete();
        return back()->with('pesan','Data Sudah Dihapus');
    }
    public function laporan()
    {
        $data['Guru'] = \App\Models\Guru::all();
        $data['Judul']='Laporan Data Guru';
        return view('guru_Laporan',$data);
    }
    public function cari(Request $request)
    {
        $cari = $request->get('search');
        $data['Guru'] = \App\Models\Siswa::where('nama_guru', 'like', '%' . $cari . '%')
            ->orWhere('alamat_guru', 'like', '%' . $cari . '%')
            ->paginate(5);
        $data['Judul'] = 'Data-Data Guru';
        return view('guru_index', $data);
    }
}
