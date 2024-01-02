<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengembangan;

class PengembanganController extends Controller
{
    public function showForm()
    {
        return view('formpengembangan');
    }

    public function storeForm(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'nip' => 'required|string',
            'pangkat' => 'required|string',
            'jabatan' => 'required|string',
            'unit_kerja' => 'required|string',
            'file_sk_penugasan' => 'required|file|mimes:pdf',
            'file_bukti_kinerja' => 'required|file|mimes:pdf',
        ]);

        $skPenugasanPath = $request->file_sk_penugasan->store('files', 'public');
        $buktiKinerjaPath = $request->file_bukti_kinerja->store('files', 'public');

        Pengembangan::create([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'pangkat' => $request->pangkat,
            'jabatan' => $request->jabatan,
            'unit_kerja' => $request->unit_kerja,
            'file_sk_penugasan' => $skPenugasanPath,
            'file_bukti_kinerja' => $buktiKinerjaPath,
        ]);

        return redirect('/')->with('success', 'Data berhasil disimpan!');
    }

    public function listPengembangan()
    {
        $pengembanganList = Pengembangan::all();

        return view('list_pengembangan', ['pengembanganList' => $pengembanganList]);
    }
}
