<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['Siswa']= \App\Models\Siswa::paginate(5);
        $data['Judul']= 'Data-Data Siswa';
        return view('siswa_index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $data['list_jk'] = ['Laki-Laki','Perempuan'];
        return view('siswa_create',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_siswa' => 'required|unique:siswas,kode_siswa',
            'nama_siswa' => 'required',
            'alamat_siswa' => 'required',
            'nomorhp_siswa' => 'required',
            'jk' => 'required',
            'tanggal_lahir' => 'required',
        ]);
        
        $Siswa = new \App\Models\Siswa();
        $Siswa->kode_siswa = $request->kode_siswa;
        $Siswa->nama_siswa = $request->nama_siswa;
        $Siswa->alamat_siswa = $request->alamat_siswa;
        $Siswa->nomorhp_siswa = $request->nomorhp_siswa;
        $Siswa->jk = $request->jk;
        $Siswa->tanggal_lahir = $request->tanggal_lahir;
        $Siswa->save();
        
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
        $data['Siswa']=\App\Models\Siswa::findOrFail($id);
        $data['list_jk'] = ['Laki-Laki','Perempuan'];
        return view('siswa_edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode_siswa' => 'required|unique:siswas,kode_siswa,'.$id,
            'nama_siswa' => 'required',
            'alamat_siswa' => 'required',
            'nomorhp_siswa' => 'required',
            'jk' => 'required',
            'tanggal_lahir' => 'required',
            
          
            
        ]);
        
        $Siswa = \App\Models\Siswa::findOrFail($id);
        $Siswa->kode_siswa = $request->kode_siswa;
        $Siswa->nama_siswa = $request->nama_siswa;
        $Siswa->alamat_siswa = $request->alamat_siswa;
        $Siswa->nomorhp_siswa = $request->nomorhp_siswa;
        $Siswa->jk = $request->jk;
        $Siswa->tanggal_lahir = $request->tanggal_lahir;
       
    
        $Siswa->save();
        
        return back()->with('pesan','Data sudah diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Siswa = \App\Models\Siswa::findOrFail($id);
        $Siswa->delete();
        return back()->with('pesan','Data Sudah Dihapus');
    }
    public function laporan()
    {
        $data['Siswa'] = \App\Models\Siswa::all();
        $data['Judul']='Laporan Data Siswa';
        return view('siswa_Laporan',$data);
    }
    public function cari(Request $request)
    {
        $cari = $request->get('search');
        $data['Siswa'] = \App\Models\Siswa::where('nama_siswa', 'like', '%' . $cari . '%')
            ->orWhere('alamat_siswa', 'like', '%' . $cari . '%')
            ->paginate(5);
        $data['Judul'] = 'Data-Data Siswa';
        return view('siswa_index', $data);
    }
    public function registrasi()
    {
        $data['list_jk'] = ['Laki-Laki','Perempuan'];
        return view('registrasi_form', $data);
    }
}
