<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function store(Request $request)
    {
        // Validasi
    $validated = $request->validate([
        'no_induk' => 'required|unique:santris',
        'nama' => 'required',
        'ttl' => 'required',
        'jenis_kelamin' => 'required|in:L,P',
        'jumlah_saudara' => 'required|integer',
        'anak_ke' => 'required|integer',
        'asal_sekolah' => 'required',
        'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Validasi foto
        'nama_ayah' => 'required',
        'nama_ibu' => 'required',
        'pekerjaan_ayah' => 'required',
        'pekerjaan_ibu' => 'required',
        'penghasilan_ayah' => 'required|numeric',
        'penghasilan_ibu' => 'required|numeric',
        'alamat_ortu' => 'required',
        'nama_wali' => 'nullable',
        'pekerjaan_wali' => 'nullable',
        'penghasilan_wali' => 'nullable|numeric',
        'no_hp_wali' => 'nullable',
        'alamat_wali' => 'nullable',
        'status' => 'required',
    ]);

    $pasFotoPath = null;
    if ($request->hasFile('pas_foto')) {
        $pasFotoPath = $request->file('pas_foto')->store('santri_photos', 'public');
    }

    // Menyimpan data santri
    Santri::create([
        'no_induk' => $validated['no_induk'],
        'pas_foto' => $pasFotoPath, 
        'nama' => $validated['nama'],
        'ttl' => $validated['ttl'],
        'jenis_kelamin' => $validated['jenis_kelamin'],
        'jumlah_saudara' => $validated['jumlah_saudara'],
        'anak_ke' => $validated['anak_ke'],
        'asal_sekolah' => $validated['asal_sekolah'],
        'nama_ayah' => $validated['nama_ayah'],
        'nama_ibu' => $validated['nama_ibu'],
        'pekerjaan_ayah' => $validated['pekerjaan_ayah'],
        'pekerjaan_ibu' => $validated['pekerjaan_ibu'],
        'penghasilan_ayah' => $validated['penghasilan_ayah'],
        'penghasilan_ibu' => $validated['penghasilan_ibu'],
        'alamat_ortu' => $validated['alamat_ortu'],
        'nama_wali' => $validated['nama_wali'],
        'pekerjaan_wali' => $validated['pekerjaan_wali'],
        'penghasilan_wali' => $validated['penghasilan_wali'],
        'no_hp_wali' => $validated['no_hp_wali'],
        'alamat_wali' => $validated['alamat_wali'],
        'status' => $validated['status'],
    ]);

    // Redirect setelah berhasil
    return redirect()->route('data.santri')->with('success', 'Data santri berhasil dibuat.');
}
    

    // Edit Santri
    public function edit($id)
    {
        $santri = Santri::findOrFail($id);
        return view('santri.edit_santri', compact('santri'));
    }

    public function update(Request $request, $id)
    {
        // Mencari data Santri berdasarkan ID
        $santri = Santri::findOrFail($id);
    
        // Validasi data yang diterima
        $validatedData = $request->validate([
            'no_induk'      => 'required|string|unique:santris,no_induk,' . $santri->id,
            'nama'          => 'required|string',
            'ttl'           => 'required|string',
            'jenis_kelamin' => 'required|string|in:L,P',
            'jumlah_saudara'=> 'required|integer',
            'anak_ke'       => 'required|integer',
            'asal_sekolah'  => 'required|string',
            'nama_ayah'     => 'required|string',
            'nama_ibu'      => 'required|string',
            'pekerjaan_ayah'=> 'required|string',
            'pekerjaan_ibu' => 'required|string',
            'penghasilan_ayah' => 'required|numeric',
            'penghasilan_ibu'  => 'required|numeric',
            'alamat_ortu'   => 'required|string',
            'nama_wali'     => 'required|string',
            'pekerjaan_wali'=> 'required|string',
            'penghasilan_wali' => 'required|numeric',
            'no_hp_wali'    => 'required|numeric',
            'alamat_wali'   => 'required|string',
            'status'        => 'required|string',
            'pas_foto'      => 'nullable|image|mimes:jpg,jpeg,png|max:2948', 
        ]);
    
        // Update data Santri
        // Menangani unggahan file pas_foto jika ada
        if ($request->hasFile('pas_foto')) {
            // Hapus foto lama jika ada
            if ($santri->pas_foto) {
                Storage::delete('public/' . $santri->pas_foto);
            }
    
            // Simpan foto baru di folder santri_photos dan perbarui path-nya di database
            $validatedData['pas_foto'] = $request->file('pas_foto')->store('santri_photos', 'public');
        }
    
        // Update data Santri dengan data yang sudah tervalidasi
        $santri->update($validatedData);
    
        // Redirect setelah berhasil update
        return redirect()->route('data.santri')->with('success', 'Data santri berhasil diperbarui.');
    }
    

    // Fungsi Delete 
    public function delete($id)
{
    $santri = Santri::findOrFail($id);
    $santri->delete();

    return redirect()->route('data.santri')->with('success', 'Data santri berhasil dihapus!');
}

//Fungsi Detail Santri
    public function detail($id) {
        $santri = Santri::findOrFail($id);

        return view('santri.detail_santri');
    }

}
