<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<div class="container mt-5">
    
            <h2 class="mb-0">Form Tambah Mahasiswa</h2>
        
        <div class="card-body">
            <form action="/mahasiswa" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="npm">NPM</label>
                    <input type="text" class="form-control" id="npm" name="npm" required>
                </div>
                <div class="form-group mb-3">
                    <label for="nama_mahasiswa">Nama Mahasiswa</label>
                    <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa" required>
                </div>
                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                <label for="kode_kelas" class="form-label">Kelas</label>
                <select name="kode_kelas" id="kode_kelas" class="form-control" required>
                    <option value="" disabled selected>-- Pilih Kelas --</option>
                    @foreach ($kelas as $k)
                        <option value="{{ $k['kode_kelas'] }}">{{ $k['nama_kelas'] }}</option>
                    @endforeach
                </select>
            <div class="mb-3">
                <label for="id_user" class="form-label"> ID User</label>
                <select name="id_user" id="id_user" class="form-control" required>
                    <option value="" disabled selected>-- Pilih User --</option>
                    @foreach ($users as $u)
                        <option value="{{ $u['id_user'] }}">{{ $u['username'] }} ({{ $u['level'] }})</option>
                    @endforeach
                </select>
            </div>
               

                <button type="submit" class="btn btn-success w-100">Simpan</button>
            </form>
        </div>
   
</div>

