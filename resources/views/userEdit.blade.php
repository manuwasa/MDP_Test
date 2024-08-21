@extends('layouts.main')

@section('container')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Data</h1>
    </div>

    <form action="{{ route('users.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="modal-body">
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp"
                    value="{{ $data->name }}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp"
                    value="{{ $data->email }}">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" aria-describedby="emailHelp"
                    value="{{ $data->password }}">
            </div>
        </div>
        <div class="modal-footer">
            <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary" id="store">Update Data</button>
        </div>
    </form>
@endsection
