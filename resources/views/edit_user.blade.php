<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form Edit User</title>
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
          <h3 class="panel-title">Form Edit User</h3>
        </div>
        <div class="panel-body">
          <form action="{{ route('user.update', $data['id_user']) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username" name="username" value="{{ $data['username'] }}" required>
            </div>

            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password" value="{{ $data['password'] }}" required>
            </div>

            <div class="form-group">
              <label for="level">Level</label>
              <select class="form-control" id="level" name="level" required>
                <option value="mahasiswa" {{ $data['level'] == 'mahasiswa' ? 'selected' : '' }}>Mahasiswa</option>
                <option value="Dosen" {{ $data['level'] == 'Dosen' ? 'selected' : '' }}>Dosen</option>
              </select>
            </div>

            <input type="hidden" name="id_user" value="{{ $data['id_user'] }}">

            <div class="text-center">
              <button type="submit" class="btn btn-success btn-space">Simpan Perubahan</button>
              <a href="/user" class="btn btn-default">Batal</a>
              <!-- alternatif jika ingin kembali ke halaman sebelumnya -->
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
