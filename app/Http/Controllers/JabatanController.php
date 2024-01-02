<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jabatan;

class JabatanController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function storeForm(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'nip' => 'required|string',
            'pangkat' => 'required|string',
            'jabatan' => 'required|string',
            'unit_kerja' => 'required|string',
            'tahun_mulai' => 'required|numeric',
            'tahun_akhir' => 'required|numeric',
            'file_sk_penugasan' => 'required|file|mimes:pdf',
            'file_bukti_kinerja' => 'required|file|mimes:pdf',
        ]);

        $skPenugasanPath = $request->file_sk_penugasan->store('files', '');
        $buktiKinerjaPath = $request->file_bukti_kinerja->store('files', '');

        Jabatan::create([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'pangkat' => $request->pangkat,
            'jabatan' => $request->jabatan,
            'unit_kerja' => $request->unit_kerja,
            'tahun_mulai' => $request->tahun_mulai,
            'tahun_akhir' => $request->tahun_akhir,
            'file_sk_penugasan' => $skPenugasanPath,
            'file_bukti_kinerja' => $buktiKinerjaPath,
        ]);

        return redirect('/')->with('success', 'Data berhasil disimpan!');
    }

    public function listJabatan()
    {
        $jabatanList = Jabatan::all();

        return view('list_jabatan', ['jabatanList' => $jabatanList]);
    }
}
