
@extends('layouts.main')
@section('title', 'mahasiswa')

@section('content')
<div class="popupForm">
    <div class="panel-heading">
        <div class="d-flex justify-content-between" style="display: flex; justify-content: space-between; align-items: center;">
            <h3 class="panel-title">Data Mahasiswa</h3>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
           <a href="{{ route('mahasiswa.create') }}" class="btn btn-warning btn-sm">+ Tambah Data</a>
        </div>
    </div>
    <div class="panel-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>NPM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Email</th>
                    <th>ID user</th>
                    <th>Nama Kelas</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
               <tbody>
    @foreach($datas as $data )
    <tr>
        <td>{{ $data['npm'] }}</td>
        <td>{{ $data['nama_mahasiswa'] }}</td>
        <td>{{ $data['email'] }}</td>
        <td>{{ $data['id_user'] }}</td>
        <td>{{ $data['nama_kelas'] }}</td>
        <td>{{ $data['username'] }}</td>
        <td>{{ $data['password'] }}</td>
    <td>
    <div class="d-flex gap-2">
        <a href="{{ route('mahasiswa.edit', $data['npm']) }}" class="btn btn-primary btn-sm">Edit</a>

        <form action="{{ route('mahasiswa.destroy', $data['npm']) }}" method="POST" onsubmit="return confirm('Yakin mau hapus data ini?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
        </form>
    </div>
    </td>
</form>
    </tr>
    @endforeach
    </tbody>
</table>
        
       
    </div>
</div>
@endsection
