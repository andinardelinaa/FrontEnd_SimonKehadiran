<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form Tambah Kelas</title>
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
          <h3 class="panel-title">Form Tambah Kelas</h3>
        </div>
        <div class="panel-body">
          <form action="/kelas" method="POST">
            @csrf
            <div class="form-group">
              <label for="kode_kelas">Kode Kelas</label>
              <input type="text" class="form-control" id="kode_kelas" name="kode_kelas" required>
            </div>
            <div class="form-group">
              <label for="nama_kelas">Nama Kelas</label>
              <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" required>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-success btn-space">Simpan</button>
              <a href="/kelas" class="btn btn-default">Batal</a>
              <!-- Atau pakai ini kalau ingin kembali ke halaman sebelumnya -->
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
