@extends('layouts.main')

@section('container')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Halaman Post</h1>
    </div>

    <div class="card mt-3 p-3">
        <div class="tombol-tambah">
            <a href="{{ route('post.create') }}" class="btn btn-success">Tambah Data</a>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-striped text-center table-posts">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Judul</th>
                        <th>Thumbnail</th>
                        <th>Penulis</th>
                        <th>Kategori</th>
                        <th>Waktu Publish</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    @php
                        $num = 0;
                    @endphp
                    @foreach ($posts as $post)
                        <tr>
                            <th>{{ $num + 1 }}</th>
                            <td>{{ $post->title }}</td>
                            <td><img src="{{ Storage::url('public/posts/') . $post->image }}" class="rounded"
                                    style="width: 100px"></td>
                            <td>{{ $post->name }}</td>
                            <td>{{ $post->kategori }}</td>
                            <td>{{ $post->published_at }}</td>
                            <td class="d-inline-flex">
                                <a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary btn-sm mx-1">Edit</a>
                                <form method="post" action="{{ route('post.destroy', $post->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="modal-create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Buat Postingan Baru</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleInputJudul1" class="form-label">Judul Post</label>
                            <input type="text" name="title" class="form-control" id="title"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <select class="form-select" aria-label="Default select example" id="kategori">
                                <option selected>Pilih Kategori</option>
                                <option value="1">Teknologi</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <div class="form-floating">
                                <textarea name="body" class="form-control" placeholder="Tulis Post Disini" id="body" style="height: 100px"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" id="store">Tambah Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
