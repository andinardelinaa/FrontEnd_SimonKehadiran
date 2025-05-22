@extends('layouts.main')
@section('title', 'kelas')

@section('content')
<div class="popupForm">
    <div class="panel-heading">
        <div class="d-flex justify-content-between" style="display: flex; justify-content: space-between; align-items: center;">
            <h3 class="panel-title">Data Kelas</h3>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
           <a href="{{ route('kelas.create') }}" class="btn btn-warning btn-sm">+ Tambah Data</a>
        </div>
    </div>
    <div class="panel-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Kode Kelas</th>
                    <th>Nama Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
               <tbody>
    @foreach($datas as $data )
    <tr>
        <td>{{ $data['kode_kelas'] }}</td>
        <td>{{ $data['nama_kelas'] }}</td>
    <td>
    <div class="d-flex gap-2">
        <a href="{{ route('kelas.edit', $data['kode_kelas']) }}" class="btn btn-primary btn-sm">Edit</a>

        <form action="{{ route('kelas.destroy', $data['kode_kelas']) }}" method="POST" onsubmit="return confirm('Yakin mau hapus data ini?')">
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
