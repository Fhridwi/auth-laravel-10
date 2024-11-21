@extends('layout.master')

@section('content')
<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Data Santri</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" method="POST" action="{{ route('update.santri', $santri->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <h3 class="mb-2">Data Santri</h3>
                            <div class="row">
                                <!-- No Induk -->
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="no_induk">No Induk</label>
                                        <input type="text" id="no_induk" class="form-control"
                                            placeholder="No Induk" name="no_induk" value="{{ old('no_induk', $santri->no_induk) }}" required>
                                        @error('no_induk')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Pas Foto -->
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="pas_foto">Pas Foto</label>
                                        <input type="file" id="pas_foto" class="form-control" name="pas_foto" accept="image/*">
                                        @error('pas_foto')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        @if($santri->pas_foto)
                                            <img src="{{ asset('storage/'.$santri->pas_foto) }}" alt="Pas Foto" width="100" class="mt-2">
                                        @endif
                                    </div>
                                </div>

                                <!-- Nama -->
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" id="nama" class="form-control"
                                            placeholder="Nama" name="nama" value="{{ old('nama', $santri->nama) }}" required>
                                        @error('nama')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Tempat Tanggal Lahir -->
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="ttl">Tempat Tanggal Lahir</label>
                                        <input type="text" id="ttl" class="form-control" placeholder="Tempat Tanggal Lahir"
                                            name="ttl" value="{{ old('ttl', $santri->ttl) }}" required>
                                        @error('ttl')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Jenis Kelamin -->
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <select id="jenis_kelamin" class="form-control" name="jenis_kelamin" required>
                                            <option value="hidden"> -- Pilih Jenis Kelamin --</option>
                                            <option value="L" {{ old('jenis_kelamin', $santri->jenis_kelamin) == 'L' ? 'selected' : '' }}>Laki-laki</option>
                                            <option value="P" {{ old('jenis_kelamin', $santri->jenis_kelamin) == 'P' ? 'selected' : '' }}>Perempuan</option>
                                        </select>
                                        @error('jenis_kelamin')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Jumlah Saudara -->
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="jumlah_saudara">Jumlah Saudara</label>
                                        <input type="number" id="jumlah_saudara" class="form-control"
                                            placeholder="Jumlah Saudara" name="jumlah_saudara" value="{{ old('jumlah_saudara', $santri->jumlah_saudara) }}" required>
                                        @error('jumlah_saudara')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Anak Ke -->
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="anak_ke">Anak Ke</label>
                                        <input type="number" id="anak_ke" class="form-control"
                                            placeholder="Anak Ke" name="anak_ke" value="{{ old('anak_ke', $santri->anak_ke) }}" required>
                                        @error('anak_ke')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Asal Sekolah -->
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="asal_sekolah">Asal Sekolah</label>
                                        <input type="text" id="asal_sekolah" class="form-control"
                                            placeholder="Asal Sekolah" name="asal_sekolah" value="{{ old('asal_sekolah', $santri->asal_sekolah) }}" required>
                                        @error('asal_sekolah')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <h3 class="mt-5 mb-2">Data Orang Tua</h3>

                                <!-- Nama Ayah -->
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="nama_ayah">Nama Ayah</label>
                                        <input type="text" id="nama_ayah" class="form-control"
                                            placeholder="Nama Ayah" name="nama_ayah" value="{{ old('nama_ayah', $santri->nama_ayah) }}" required>
                                        @error('nama_ayah')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Nama Ibu -->
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="nama_ibu">Nama Ibu</label>
                                        <input type="text" id="nama_ibu" class="form-control"
                                            placeholder="Nama Ibu" name="nama_ibu" value="{{ old('nama_ibu', $santri->nama_ibu) }}" required>
                                        @error('nama_ibu')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Pekerjaan Ayah -->
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                                        <input type="text" id="pekerjaan_ayah" class="form-control"
                                            placeholder="Pekerjaan Ayah" name="pekerjaan_ayah" value="{{ old('pekerjaan_ayah', $santri->pekerjaan_ayah) }}" required>
                                        @error('pekerjaan_ayah')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Pekerjaan Ibu -->
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                                        <input type="text" id="pekerjaan_ibu" class="form-control"
                                            placeholder="Pekerjaan Ibu" name="pekerjaan_ibu" value="{{ old('pekerjaan_ibu', $santri->pekerjaan_ibu) }}" required>
                                        @error('pekerjaan_ibu')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Penghasilan Ayah -->
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="penghasilan_ayah">Penghasilan Ayah</label>
                                        <input type="number" id="penghasilan_ayah" class="form-control"
                                            placeholder="Penghasilan Ayah" name="penghasilan_ayah" value="{{ old('penghasilan_ayah', $santri->penghasilan_ayah) }}" required>
                                        @error('penghasilan_ayah')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Penghasilan Ibu -->
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="penghasilan_ibu">Penghasilan Ibu</label>
                                        <input type="number" id="penghasilan_ibu" class="form-control"
                                            placeholder="Penghasilan Ibu" name="penghasilan_ibu" value="{{ old('penghasilan_ibu', $santri->penghasilan_ibu) }}" required>
                                        @error('penghasilan_ibu')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Alamat Orang Tua -->
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="alamat_ortu">Alamat Orang Tua</label>
                                        <textarea id="alamat_ortu" class="form-control"
                                            name="alamat_ortu" placeholder="Alamat Orang Tua" required>{{ old('alamat_ortu', $santri->alamat_ortu) }}</textarea>
                                        @error('alamat_ortu')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <h3 class="mt-5 mb-2">Data Wali</h3>

                                <!-- Nama Wali -->
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="nama_wali">Nama Wali</label>
                                        <input type="text" id="nama_wali" class="form-control"
                                            placeholder="Nama Wali" name="nama_wali" value="{{ old('nama_wali', $santri->nama_wali) }}" required>
                                        @error('nama_wali')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Pekerjaan Wali -->
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="pekerjaan_wali">Pekerjaan Wali</label>
                                        <input type="text" id="pekerjaan_wali" class="form-control"
                                            placeholder="Pekerjaan Wali" name="pekerjaan_wali" value="{{ old('pekerjaan_wali', $santri->pekerjaan_wali) }}" required>
                                        @error('pekerjaan_wali')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Penghasilan Wali -->
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="penghasilan_wali">Penghasilan Wali</label>
                                        <input type="number" id="penghasilan_wali" class="form-control"
                                            placeholder="Penghasilan Wali" name="penghasilan_wali" value="{{ old('penghasilan_wali', $santri->penghasilan_wali) }}" required>
                                        @error('penghasilan_wali')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- No HP Wali -->
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="no_hp_wali">No HP Wali</label>
                                        <textarea id="no_hp_wali" class="form-control"
                                            name="no_hp_wali" placeholder="No HP Wali" required>{{ old('no_hp_wali', $santri->no_hp_wali) }}</textarea>
                                        @error('no_hp_wali')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Alamat Wali -->
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="alamat_wali">Alamat Wali</label>
                                        <textarea id="alamat_wali" class="form-control"
                                            name="alamat_wali" placeholder="Alamat Wali" required>{{ old('alamat_wali', $santri->alamat_wali) }}</textarea>
                                        @error('alamat_wali')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Status -->
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <input type="text" id="status" class="form-control"
                                            name="status" value="{{ old('status', $santri->status) }}" placeholder="Status" required>
                                        @error('status')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Submit & Reset -->
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Update</button>
                                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
