@extends('layouts.main')
@section('title', 'user')

@section('content')
<div class="popupForm">
    <div class="panel-heading">
        <div class="d-flex justify-content-between" style="display: flex; justify-content: space-between; align-items: center;">
            <h3 class="panel-title">Data User</h3>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
           <a href="{{ route('user.create') }}" class="btn btn-warning btn-sm">+ Tambah Data</a>
        </div>
    </div>
    <div class="panel-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID User</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Level</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
               <tbody>
    @foreach($datas as $data )
    <tr>
        <td>{{ $data['id_user'] }}</td>
        <td>{{ $data['username'] }}</td>
        <td>{{ $data['password'] }}</td>
        <td>{{ $data['level'] }}</td>
    <td>
    <div class="d-flex gap-2">
<a href="{{ route('kelas.edit', $data['kode_kelas']) }}" class="btn btn-primary btn-sm">Edit</a>

        <form action="{{ route('user.destroy', $data['id_user']) }}" method="POST" onsubmit="return confirm('Yakin mau hapus data ini?')">
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
