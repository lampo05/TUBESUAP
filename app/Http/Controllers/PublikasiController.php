<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publikasi;

class PublikasiController extends Controller
{
    public function showForm()
    {
        return view('formpublikasi');
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
            'file_publikasi' => 'required|file|mimes:pdf',
        ]);

        $publikasiPath = $request->file_publikasi->store('files', 'public');

        Publikasi::create([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'pangkat' => $request->pangkat,
            'jabatan' => $request->jabatan,
            'unit_kerja' => $request->unit_kerja,
            'judul' => $request->judul,
            'file_publikasi' => $publikasiPath,
        ]);

        return redirect('/')->with('success', 'Data berhasil disimpan!');
    }

    public function listPublikasi()
    {
        $publikasiList = Publikasi::all();

        return view('list_publikasi', ['publikasiList' => $publikasiList]);
    }
}
