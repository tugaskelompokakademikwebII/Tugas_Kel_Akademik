<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['Mapel']= \App\Models\Mapel::paginate(5);
        $data['Judul']= 'Jadwal Pelajaran';
        return view('mapel_index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['list_mp'] = ['Matematika','Bahasa Indonesia','Bahasa Inggris','IPA','IPS','Olahraga','TIK'];
        $data['list_kls'] = ['X','XI','XII'];
        return view('mapel_create',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_mp' => 'required|unique:mapels,kode_mp',
            'nama_mp' => 'required',
            'jadwal' => 'required',
            'kelas' => 'required',
            
        ]);
        
        $Mapel = new \App\Models\Mapel();
        $Mapel->kode_mp = $request->kode_mp;
        $Mapel->nama_mp = $request->nama_mp;
        $Mapel->jadwal = $request->jadwal;
        $Mapel->kelas = $request->kelas;
        $Mapel->save();
        
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
        $data['Mapel']=\App\Models\Mapel::findOrFail($id);
        $data['list_mp'] = ['Matematika','Bahasa Indonesia','Bahasa Inggris','IPA','IPS','Olahraga','TIK'];
        $data['list_kls'] = ['X','XI','XII'];
        return view('mapel_edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode_mp' => 'required|unique:mapels,kode_mp,'.$id,
            'nama_mp' => 'required',
            'jadwal' => 'required',
            'kelas' => 'required',
            
        ]);
        
        $Mapel =  \App\Models\Mapel::findOrFail($id);
        $Mapel->kode_mp = $request->kode_mp;
        $Mapel->nama_mp = $request->nama_mp;
        $Mapel->jadwal = $request->jadwal;
        $Mapel->kelas = $request->kelas;
        $Mapel->save();
        
        return back()->with('pesan','Data sudah disimpan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Mapel = \App\Models\Mapel::findOrFail($id);
        $Mapel->delete();
        return back()->with('pesan','Data Sudah Dihapus');
    }
    public function laporan()
    {
        $data['Mapel'] = \App\Models\Mapel::all();
        $data['Judul']='Informasi Jadwal Pelajaran';
        return view('mapel_Laporan',$data);
    }
    public function cari(Request $request)
    {
        $cari = $request->get('search');
        $data['Mapel'] = \App\Models\Siswa::where('nama_mp', 'like', '%' . $cari . '%')
            ->orWhere('kode_mp', 'like', '%' . $cari . '%')
            ->paginate(5);
        $data['Judul'] = 'Data-Data Mapel';
        return view('mapel_index', $data);
    }
}
