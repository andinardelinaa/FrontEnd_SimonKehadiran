@extends('layouts.app') <!-- Atau layout sesuai struktur project-mu -->

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <h3 class="panel-title">Edit Data Mahasiswa</h3>
                </div>
                <div class="panel-body">
                    <form action="{{ route('mahasiswa.update', $mahasiswa['npm']) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- NPM (readonly) -->
                        <div class="form-group">
                            <label for="npm">NPM</label>
                            <input type="text" class="form-control" id="npm" name="npm" value="{{ $mahasiswa['npm'] }}" readonly>
                        </div>

                        <!-- Nama Mahasiswa -->
                        <div class="form-group">
                            <label for="nama_mahasiswa">Nama Mahasiswa</label>
                            <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa" value="{{ $mahasiswa['nama_mahasiswa'] }}" required>
                        </div>

                        <!-- Email -->
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ $mahasiswa['email'] }}" required>
                        </div>

                        <!-- Kode Kelas -->
                        <div class="form-group">
                            <label for="kode_kelas">Kelas</label>
                            <select name="kode_kelas" id="kode_kelas" class="form-control" required>
                                <option value="">-- Pilih Kelas --</option>
                                @foreach ($kelas as $k)
                                    <option 
                                        value="{{ $k['kode_kelas'] }}" 
                                        {{ $k['kode_kelas'] == $mahasiswa['kode_kelas'] ? 'selected' : '' }}>
                                        {{ $k['nama_kelas'] }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- ID User -->
                        <div class="form-group">
                            <label for="id_user">ID User</label>
                            <select name="id_user_view" id="id_user" class="form-control" disabled>
                                @foreach ($user as $u)
                                    <option 
                                        value="{{ $u['id_user'] }}" 
                                        {{ $u['id_user'] == $mahasiswa['id_user'] ? 'selected' : '' }}>
                                        {{ $u['id_user'] }}
                                    </option>
                                @endforeach
                            </select>
                            <!-- Hidden untuk dikirim ke backend -->
                            <input type="hidden" name="id_user" value="{{ $mahasiswa['id_user'] }}">
                        </div>

                        <!-- Tombol -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-space">Update</button>
                            <a href="{{ route('mahasiswa.index') }}" class="btn btn-default">Batal</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
