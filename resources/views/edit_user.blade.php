<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<div class="container mt-5">
    
            <h2 class="mb-0">Form Edit User</h2>
        
        <div class="card-body">
            <form action="{{ route('user.update', $data['id_user']) }}" method="POST">
                @csrf
                 @method('PUT')
                 
                <div class="form-group mb-3">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" value="{{ $data['username'] }}" id="username" name="username" required>
                </div>

                <div class="form-group mb-3">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" value="{{ $data['password'] }}" id="password" name="password" required>
                </div>

                <div class="form-group mb-3">
                    <label for="level">Level</label>
                    <select class="form-control" id="level" name="level" required>
                        <option value="mahasiswa" {{ $data['level'] == 'mahasiswa' ? 'selected' : '' }}>Mahasiswa</option>
                        <option value="Dosen" {{ $data['level'] == 'Dosen' ? 'selected' : '' }}>Dosen</option>
                    </select>
                </div>
                <input type="hidden" name="id_user" value="{{ $data['id_user'] }}">

    <!-- input lainnya di sini -->

    <button type="submit" class="btn btn-success btn-block">Simpan Perubahan</button>
</form>
        </div>
   
</div>

