@extends('layout.master')

@section('content')
<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tambah Data Santri</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" method="POST" action="{{ route('store.santri') }}">
                            @csrf
                            <div class="row">
                                <!-- No Induk -->
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="no_induk">No Induk</label>
                                        <input type="text" id="no_induk" class="form-control"
                                            placeholder="No Induk" name="no_induk" value="{{ old('no_induk') }}" required>
                                        @error('no_induk')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Nama -->
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" id="nama" class="form-control"
                                            placeholder="Nama" name="nama" value="{{ old('nama') }}" required>
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
                                            name="ttl" value="{{ old('ttl') }}" required>
                                        @error('ttl')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Nama Wali -->
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="nama_wali">Nama Wali</label>
                                        <input type="text" id="nama_wali" class="form-control"
                                            name="nama_wali" value="{{ old('nama_wali') }}" placeholder="Nama Wali" required>
                                        @error('nama_wali')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- No HP Wali -->
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="np_hp_wali">No HP Wali</label>
                                        <input type="text" id="np_hp_wali" class="form-control"
                                            name="no_hp_wali" value="{{ old('no_hp_wali') }}" placeholder="No HP Wali" required>
                                        @error('no_hp_wali')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Alamat -->
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <textarea id="alamat" class="form-control"
                                            name="alamat" placeholder="Alamat" required>{{ old('alamat') }}</textarea>
                                        @error('alamat')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Status -->
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <input type="text" id="status" class="form-control"
                                            name="status" value="{{ old('status') }}" placeholder="Status" required>
                                        @error('status')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Submit & Reset -->
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
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
