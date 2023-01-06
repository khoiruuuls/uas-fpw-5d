<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::get();
        return view('mahasiswa.index', compact('mahasiswas'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'npm' => 'required|numeric',
            'nama_mahasiswa' => 'required',
            'jenis_kelamin' => 'required',
        ]);

        Mahasiswa::create($validate);
        return redirect()->route('mahasiswa.index')->with('message', "Data Mahasiswa {$validate['nama_mahasiswa']} berhasil ditambahkan");
    }

    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index')->with('message', "Data Mahasiswa {$mahasiswa->nama_mahasiswa} berhasil dihapus");
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $validate = $request->validate([
            'npm' => 'required|numeric',
            'nama_mahasiswa' => 'required',
            'jenis_kelamin' => 'required',
            'absen' => 'required',
            'tugas' => 'required',
            'uts' => 'required',
            'uas' => 'required',
        ]);

        $mahasiswa->update($validate);
        return redirect()->route('mahasiswa.index')->with('message', "Data Mahasiswa {$mahasiswa->nama_mahasiswa} berhasil diubah");
    }

    public function show(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    public function take(Mahasiswa $mahasiswa)
    {
        $dosens = Dosen::get();
        return view('mahasiswa.take', compact('mahasiswa', 'dosens'));
    }

    public function takeStore(Request $request, Mahasiswa $mahasiswa)
    {
        $dosens = Dosen::find($request->dosen_id);
        $mahasiswa->dosens()->sync($dosens);

        return redirect()->route('mahasiswa.index')->with('message', "Mahasiswa {$mahasiswa->nama_mahasiswa} berhasil mengambil Bimbingan");
    }
}
