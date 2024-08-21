@extends('layouts.main')

@section('container')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Halaman User</h1>
    </div>

    <div class="card mt-3 p-3">
        <div class="tombol-tambah">
            <a href="{{ route('users.create') }}" class="btn btn-success">Tambah Data</a>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $num = 1;
                    @endphp

                    @foreach ($users as $user)
                        <tr>
                            <th>{{ $num++ }}</th>
                            <td class="align-middle">{{ $user->name }}</td>
                            <td class="align-middle">{{ $user->email }}</td>
                            <td class="align-middle">{{ $user->password }}</td>
                            <td class="d-inline-flex">
                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-sm mx-1">Edit</a>
                                <form method="post" action="{{ route('users.destroy', $user->id) }}">
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
@endsection
