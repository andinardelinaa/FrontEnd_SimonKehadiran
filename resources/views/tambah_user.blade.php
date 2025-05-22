<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<div class="container mt-5">
    
            <h2 class="mb-0">Form Tambah User</h2>
        
        <div class="card-body">
            <form action="/user" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="form-group mb-3">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="form-group mb-3">
                    <label for="level">Level</label>
                    <select class="form-control" id="level" name="level" required>
                        <option value="" disabled selected>Pilih Level</option>
                        <option value="mahasiswa">Mahasiswa</option>
                        <option value="Dosen">Dosen</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-success w-100">Simpan</button>
            </form>
        </div>
   
</div>

