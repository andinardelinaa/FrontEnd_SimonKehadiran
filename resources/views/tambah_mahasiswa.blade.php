<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form Tambah Mahasiswa</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    .form-container {
      margin-top: 50px;
    }
    .btn-space {
      margin-right: 10px;
    }
  </style>
</head>
<body>

<div class="container form-container">
  <div class="row justify-content-center">
    <div class="col-md-6 col-md-offset-3">
      <div class="panel panel-default">
        <div class="panel-heading text-center">
          <h3 class="panel-title">Form Tambah Mahasiswa</h3>
        </div>
        <div class="panel-body">
          <form action="/mahasiswa" method="POST">
            @csrf
            <div class="form-group">
              <label for="npm">NPM</label>
              <input type="text" class="form-control" id="npm" name="npm" required>
            </div>
            <div class="form-group">
              <label for="nama_mahasiswa">Nama Mahasiswa</label>
              <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa" required>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
              <label for="kode_kelas">Kelas</label>
              <select name="kode_kelas" id="kode_kelas" class="form-control" required>
                <option value="" disabled selected>-- Pilih Kelas --</option>
                @foreach ($kelas as $k)
                  <option value="{{ $k['kode_kelas'] }}">{{ $k['nama_kelas'] }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="id_user">ID User</label>
              <select name="id_user" id="id_user" class="form-control" required>
                <option value="" disabled selected>-- Pilih User --</option>
                @foreach ($users as $u)
                  <option value="{{ $u['id_user'] }}">{{ $u['username'] }} ({{ $u['level'] }})</option>
                @endforeach
              </select>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-success btn-space">Simpan</button>
              <a href="/mahasiswa" class="btn btn-default">Batal</a>
              <!-- atau kalau ingin kembali ke halaman sebelumnya -->
              <!-- <a href="javascript:history.back()" class="btn btn-default">Batal</a> -->
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
