<!-- NPM (readonly) -->
<div class="form-group mb-3">
    <label for="npm">NPM</label>
    <input type="text" class="form-control" id="npm" name="npm" value="{{ $data['npm'] }}" readonly>
</div>

<!-- Nama Mahasiswa -->
<div class="form-group mb-3">
    <label for="nama_mahasiswa">Nama Mahasiswa</label>
    <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa" value="{{ $data['nama_mahasiswa'] }}" required>
</div>

<!-- Email -->
<div class="form-group mb-3">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" value="{{ $data['email'] }}" required>
</div>

<!-- Kode Kelas (tidak bisa diubah tapi tetap ditampilkan dalam select) -->
<div class="form-group mb-3">
    <label for="kode_kelas">Kelas</label>
    <select name="kode_kelas" id="kode_kelas" class="form-control" required>
        <option value="">-- Pilih Kelas --</option>
        @foreach($data as $datas)
            <option 
                value="{{ $data['kode_kelas'] }}" 
                {{ old('kode_kelas', $mahasiswa->kode_kelas) == $data->kode_kelas ? 'selected' : '' }}>
                {{ $data->nama_kelas }}
            </option>
        @endforeach
    </select>
</div>


<!-- ID User (juga ditampilkan saja) -->
<div class="form-group mb-3">
    <label for="id_user">ID User</label>
    <select name="id_user" id="id_user" class="form-control" required disabled>
        <option value="{{ $data['id_user'] }}" selected>{{ $data['id_user'] }}</option>
    </select>
    <input type="hidden" name="id_user" value="{{ $data['id_user'] }}">
</div>
