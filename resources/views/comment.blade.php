@extends('layouts.main')
@section('container')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Halaman Komentar</h1>
    </div>

    <div class="card mt-3 p-3">
        <div class="tombol-tambah">
            {{-- <a href="" class="btn btn-success">Tambah Data</a> --}}
        </div>
        <div class="card-body table-responsive">
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Penulis</th>
                        <th>Artikel</th>
                        <th>Komentar</th>
                        <th>Waktu Publish</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1</th>
                        <td>Manuwasa</td>
                        <td>Judul Post 1</td>
                        <td>Lorem ipsum dolor ...</td>
                        <td>01/04/24</td>
                        <td>
                            <a href="" class="btn btn-primary btn-sm">Edit</a>
                            <a href="" class="btn btn-danger btn-sm">Hapus</a>
                            <a href="" class="btn btn-warning btn-sm">Lihat Komentar</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
