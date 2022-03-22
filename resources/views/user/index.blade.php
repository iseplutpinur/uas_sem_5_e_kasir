@extends('layout.template')
@section('title', $title)
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>Pengguna</h2>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{ route('user.create') }}" class="btn btn-sm btn-success"><i class="fas fa-sm fa-plus"></i> Tambah</a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table" id="data-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning"><i class="fas fa-pen"></i></a>
                            <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
