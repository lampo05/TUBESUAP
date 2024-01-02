<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurnal;

class JurnalController extends Controller
{
    public function showForm()
    {
        return view('formjurnal');
    }

    public function storeForm(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'nip' => 'required|string',
            'pangkat' => 'required|string',
            'jabatan' => 'required|string',
            'unit_kerja' => 'required|string',
            'judul' => 'required|string',
            'file_jurnal' => 'required|file|mimes:pdf',
        ]);

        $jurnalPath = $request->file_jurnal->store('files', 'public');

        Jurnal::create([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'pangkat' => $request->pangkat,
            'jabatan' => $request->jabatan,
            'unit_kerja' => $request->unit_kerja,
            'judul' => $request->judul,
            'file_jurnal' => $jurnalPath,
        ]);

        return redirect('/')->with('success', 'Data berhasil disimpan!');
    }

    public function listJurnal()
    {
        $jurnalList = Jurnal::all();

        return view('list_jurnal', ['jurnalList' => $jurnalList]);
    }
}
