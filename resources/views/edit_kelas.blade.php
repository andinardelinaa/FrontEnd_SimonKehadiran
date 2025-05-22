<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<div class="container mt-5">
    
            <h2 class="mb-0">Form Edit Kelas</h2>
        
        <div class="card-body">
            <form action="{{ route('kelas.update', $data['kode_kelas']) }}" method="POST">
                @csrf
                 @method('PUT')

                <div class="form-group mb-3">
                    <label for="kode_kelas">Kode Kelas</label>
                    <input type="text" class="form-control" value="{{ $data['kode_kelas']}}" id="kode_kelas" name="kode_kelas" readonly>
                </div>

                <div class="form-group mb-3">
                    <label for="nama_kelas">Nama Kelas</label>
                    <input type="text" class="form-control" value="{{ $data['nama_kelas'] }}" id="nama_kelas" name="nama_kelas" required>
                </div>

    <!-- input lainnya di sini -->

    <button type="submit" class="btn btn-success btn-block">Simpan Perubahan</button>
</form>
        </div>
   
</div>

