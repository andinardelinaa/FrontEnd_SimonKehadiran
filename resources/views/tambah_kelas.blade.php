<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<div class="container mt-5">
    
            <h2 class="mb-0">Form Tambah Kelas</h2>
        
        <div class="card-body">
            <form action="/kelas" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="username">Kode Kelas</label>
                    <input type="text" class="form-control" id="kode_kelas" name="kode_kelas" required>
                </div>
                <div class="form-group mb-3">
                    <label for="password">Nama Kelas</label>
                    <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" required>
                </div>
                <button type="submit" class="btn btn-success w-100">Simpan</button>
            </form>
        </div>
   
</div>

