<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Masyarakat;

class MasyarakatController extends Controller
{
    public function showForm()
    {
        return view('formmasyarakat');
    }

    public function storeForm(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'nip' => 'required|string',
            'pangkat' => 'required|string',
            'jabatan' => 'required|string',
            'unit_kerja' => 'required|string',
            'jenis' => 'required|string',
            'deskripsi' => 'required|string',
        ]);

        Masyarakat::create([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'pangkat' => $request->pangkat,
            'jabatan' => $request->jabatan,
            'unit_kerja' => $request->unit_kerja,
            'jenis' => $request->jenis,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect('/')->with('success', 'Data berhasil disimpan!');
    }

    public function listMasyarakat()
    {
        $masyarakatList = Masyarakat::all();

        return view('list_masyarakat', ['masyarakatList' => $masyarakatList]);
    }
}
