<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nilai;
use App\Models\Siswa;
use App\Models\Mapel;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['nilai'] = Nilai::with(['Siswa', 'Mapels'])->paginate(5);
        $data['bebas'] = 'Data-Data Nilai';
        return view('nilai_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    // Fetching list of students
    $data['list_siswa'] = Siswa::selectRaw("id, concat(kode_siswa, '-', nama_siswa) as tampil")
        ->pluck('tampil', 'id');

    // Fetching list of subjects
    $data['list_mapel'] = Mapel::selectRaw("id, concat(nama_mp) as tampil")
        ->pluck('tampil', 'id');

    // Predefined list of grades
    $data['list_predikat'] = [
        'A' => 'A',
        'B' => 'B',
        'C' => 'C',
        'D' => 'D',
    ];

    // Passing all data to the view
    return view('nilai_create', $data);
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'siswa_id' => 'required',
            'mapel_id' => 'required',
            'predikat' => 'required',
            'nilai' => 'required',
        ]);

       
        $nilai = new Nilai();
        $nilai->siswa_id = $request->siswa_id;
        $nilai->mapel_id = $request->mapel_id;
        $nilai->predikat = $request->predikat;
        $nilai->nilai = $request->nilai; 
        $nilai->save();

       
        return back()->with('pesan', 'Data Nilai berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Not implemented, add logic here if necessary
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $nilai = Nilai::findOrFail($id);
    $list_siswa = Siswa::pluck('nama_siswa', 'id');
    $list_mapel = Mapel::pluck('nama_mp', 'id');

    return view('nilai_edit', compact('nilai', 'list_siswa', 'list_mapel'));
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $request->validate([
        'siswa_id' => 'required',
        'mapel_id' => 'required',
        'nilai' => 'required|numeric|min:10|max:100',
    ]);

    $nilai = Nilai::findOrFail($id);
    $nilai->siswa_id = $request->siswa_id;
    $nilai->mapel_id = $request->mapel_id;
    $nilai->nilai = $request->nilai;
    $nilai->save();

    return redirect()->route('nilai_index')->with('pesan', 'Data Nilai berhasil diupdate.');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $nilai = Nilai::findOrFail($id);
        $nilai->delete();

        return back()->with('pesan', 'Data Sudah Dihapus');
    }

    /**
     * Generate a report of the data.
     */
    public function laporan($siswa_id)
    {
        // Ambil data siswa berdasarkan ID
        $siswa = Siswa::findOrFail($siswa_id);

        // Ambil data nilai siswa beserta mapel terkait
        $nilai = Nilai::where('siswa_id', $siswa_id)
            ->with('mapels') // Ambil relasi ke Mapel
            ->get();

        return view('nilai_laporan', compact('siswa', 'nilai'));
    }

    /**
     * Search for specific records.
     */
    public function cari(Request $request)
    {
        $cari = $request->get('search');
        $data['nilai'] = Nilai::whereHas('Siswa', function ($query) use ($cari) {
            $query->where('siswa_id', 'like', '%' . $cari . '%');
        })->paginate(5); // Corrected to query the Nilai model with relation

        $data['bebas'] = 'Data-Data Nilai';
        return view('nilai_index', $data);
    }
    public function laporanSemua()
    {
    // Ambil semua siswa beserta nilai dan mata pelajaran terkait
        $siswas = Siswa::with(['nilais.mapels'])->get();

    // Kirim data ke view
        return view('nilai_laporan_semua', compact('siswas'));
    }

}
