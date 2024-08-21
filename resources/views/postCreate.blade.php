@extends('layouts.main')

@section('container')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Data</h1>
    </div>

    <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <div class="form-group mb-3">
                <label for="name" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="name" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea name="body" class="form-control" id="body" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label>Gambar</label>
                <input type="file" class="form-control" name="image">
            </div>
            <div class="form-group">
                <label for="category">Kategori</label>
                <select class="custom-select custom-select-sm" name="category">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->kategori }}</option>
                    @endforeach
                </select>
            </div>

        </div>
        <div class="form-group">
            <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary" id="store">Tambah Data</button>
        </div>
    </form>
@endsection
