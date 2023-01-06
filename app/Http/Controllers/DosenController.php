<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Dosen;

class DosenController extends Controller
{
    public function index()
    {
        $dosens = Dosen::get();
        return view('dosen.index', compact('dosens'));
    }

    public function create()
    {
        return view('dosen.create');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'nidn' => 'required',
            'nama_dosen' => 'required',
            'matakuliah' => 'required'
        ]);

        Dosen::create($validate);
        return redirect()->route('dosen.index')->with('message', "Data Dosen {$validate['nama_dosen']} berhasil ditambahkan");
    }

    public function destroy(Dosen $dosen)
    {
        $dosen->delete();
        return redirect()->route('dosen.index')->with('message', "Data Dosen {$dosen->nama_dosen} berhasil dihapus");
    }

    public function edit(Dosen $dosen)
    {
        return view('dosen.edit', compact('dosen'));
    }

    public function update(Request $request, Dosen $dosen)
    {
        $validate = $request->validate([
            'nidn' => 'required',
            'nama_dosen' => 'required',
            'matakuliah' => 'required'
        ]);

        $dosen->update($validate);

        return redirect()->route('dosen.index')->with('message', "Data Dosen {$dosen->nama_dokter} berhasil diubah");
    }

    public function show(Dosen $dosen)
    {
        return view('dosen.show', compact('dosen'));
    }
}
