<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ilmiah;

class IlmiahController extends Controller
{
    public function showForm()
    {
        return view('formilmiah');
    }

    public function storeForm(Request $request)
    {
        // Validasi data
        $request->validate([
            'nama' => 'required|string',
            'nip' => 'required|string',
            'pangkat' => 'required|string',
            'jabatan' => 'required|string',
            'unit_kerja' => 'required|string',
            'jenis' => 'required|string',
            'deskripsi' => 'required|string',
            'bulan' => 'required|string',
            'tahun' => 'required|numeric',
            'file_sk_penugasan' => 'required|file|mimes:pdf',
            'file_bukti_kinerja' => 'required|file|mimes:pdf',
        ]);

        // Upload file dan dapatkan pathnya
        $skPenugasanPath = $request->file_sk_penugasan->store('files', 'public');
        $buktiKinerjaPath = $request->file_bukti_kinerja->store('files', 'public');

        // Simpan data ke dalam database
        Ilmiah::create([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'pangkat' => $request->pangkat,
            'jabatan' => $request->jabatan,
            'unit_kerja' => $request->unit_kerja,
            'jenis' => $request->jenis,
            'deskripsi' => $request->deskripsi,
            'bulan' => $request->bulan,
            'tahun' => $request->tahun,
            'file_sk_penugasan' => $skPenugasanPath,
            'file_bukti_kinerja' => $buktiKinerjaPath,
        ]);

        return redirect('/')->with('success', 'Data berhasil disimpan!');
    }

    public function listIlmiah()
    {
        $ilmiahList = Ilmiah::all();

        return view('list_ilmiah', ['ilmiahList' => $ilmiahList]);
    }
}
