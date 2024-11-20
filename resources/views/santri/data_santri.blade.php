@extends('layout.master')


@section('content')
    <section class="section">
        <div class="row" id="basic-table">
            <div class="col-12 ">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="card-title">Data Santri</h4>
                        <a href="{{ route('create.santri') }}" class="btn btn-sm btn-primary ml-auto">Tambah Santri</a>
                    </div>
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="card-content">
                        <div class="card-body">
                            <!-- Table with outer spacing -->
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>No Induk</th>
                                            <th>Nama</th>
                                            <th>TTL</th>
                                            <th>Nama Wali</th>
                                            <th>No Hp wali</th>
                                            <th>Alamat</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($santris as $santri)
                                            <tr>
                                                <td class="text-bold-500">{{ $loop->iteration }}</td>
                                                <td>{{ $santri->no_induk }}</td>
                                                <td class="text-bold-500">{{ $santri->nama }}</td>
                                                <td class="text-bold-500">{{ $santri->ttl }}</td>
                                                <td class="text-bold-500">{{ $santri->nama_wali }}</td>
                                                <td class="text-bold-500">{{ $santri->no_hp_wali }}</td>
                                                <td class="text-bold-500">{{ $santri->alamat }}</td>
                                                <td class="text-bold-500">{{ $santri->status }}</td>
                                                <td class="text-center">

                                                    <!-- Tombol Lihat (View) -->
                                                    <a href=""
                                                        class="btn btn-primary btn-sm" title="Lihat">
                                                        <i class="bi bi-eye"></i>
                                                    </a>

                                                    <!-- Tombol Edit -->
                                                    <a href="{{ route('edit.santri', $santri->id) }}"
                                                        class="btn btn-warning btn-sm ms-2" title="Edit">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </a>

                                                    <!-- Tombol Hapus -->
                                                    <form action=""
                                                        method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm ms-2"
                                                            title="Hapus">
                                                            <i class="bi bi-trash"></i>
                                                        </button>
                                                    </form>


                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
