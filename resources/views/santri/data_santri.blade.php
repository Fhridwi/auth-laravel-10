@extends('layout.master')


@section('content')
        <section class="section">
        <div class="row" id="basic-table">
            <div class="col-12 ">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Santri</h4>
                    </div>
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
        <tr>
            <td class="text-bold-500">1</td>
            <td>190021</td>
            <td class="text-bold-500">Fahri Dwi Hermawan</td>
            <td class="text-bold-500">Madiun, 06 April 2007</td>
            <td class="text-bold-500">Danang Hermawan</td>
            <td class="text-bold-500">08578469338</td>
            <td class="text-bold-500">Banjarsari,bugangin, Madiun, Madiun</td>
            <td class="text-bold-500">Aktif</td>
            <td class="text-center">
            
                <button class="btn btn-primary btn-sm" title="Lihat">
                    <i class="bi bi-eye"></i>
                </button>

                <button class="btn btn-warning btn-sm ms-2" title="Edit">
                    <i class="bi bi-pencil-square"></i>
                </button>

                <button class="btn btn-danger btn-sm ms-2" title="Hapus">
                    <i class="bi bi-trash"></i>
                </button>

            </td>
        </tr>
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

