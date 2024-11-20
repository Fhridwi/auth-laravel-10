<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use Illuminate\Http\Request;

class SantriController extends Controller
{
    // Menampilkan data santri
    public function index() {
        $santris = Santri::all();
        return view('santri.data_santri', compact('santris'));
    }

    // Menampilkan form untuk menambah santri
    public function createSantri() {
        return view('santri.create_santri');
    }

    // Menyimpan data santri yang baru
    public function store(Request $request) {
       
        $validatedData = $request->validate([
            'no_induk'     => 'required|string',
            'nama'         => 'required|string',
            'ttl'          => 'required|string',
            'nama_wali'    => 'required|string',
            'no_hp_wali'   => 'required|numeric',
            'alamat'       => 'required|string',
            'status'       => 'required|string',
        ]);

        Santri::create($validatedData);

        return redirect()->route('data.santri')->with('success', 'Santri berhasil ditambahkan.');
    }
}
