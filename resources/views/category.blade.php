@extends('layouts.main')

@section('container')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Halaman Category</h1>
    </div>

    <div class="card mt-3 p-3">
        <div class="tombol-tambah">
            <a href="" class="btn btn-success" data-toggle="modal" data-target="#tambahData">Tambah Data</a>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Kategori</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1</th>
                        <td>Teknologi Informasi</td>
                        <td>
                            <a href="" class="btn btn-primary btn-sm">Edit</a>
                            <a href="" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Buat Kategori Baru</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleInputJudul1" class="form-label">Nama Kategori</label>
                            <input type="text" class="form-control" id="exampleInputJudul1" aria-describedby="emailHelp">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Tambah Data</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
