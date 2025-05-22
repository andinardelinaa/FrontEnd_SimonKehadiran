<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form Tambah User</title>
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
    <div class="col-md-6 col-md-offset-3"> <!-- Form kecil dan di tengah -->
      <div class="panel panel-default">
        <div class="panel-heading text-center">
          <h3 class="panel-title">Form Tambah User</h3>
        </div>
        <div class="panel-body">
          <form action="/user" method="POST" autocomplete="off">
            @csrf
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username" name="username" required autocomplete="off">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="text" class="form-control" id="password" name="password" required autocomplete="new-password">
            </div>
            <div class="form-group">
              <label for="level">Level</label>
              <select class="form-control" id="level" name="level" required>
                <option value="" disabled selected>Pilih Level</option>
                <option value="mahasiswa">Mahasiswa</option>
                <option value="Dosen">Dosen</option>
              </select>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-success btn-space">Simpan</button>
              <a href="/user" class="btn btn-default">Batal</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
