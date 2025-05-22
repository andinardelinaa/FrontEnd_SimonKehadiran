# 🌐 SISTEM MONITORING KEHADIRAN

![Laravel Version](https://img.shields.io/badge/Laravel-12.x-red)  

👩‍💻 **Andin Ardelina Saputri**  
Informatics Engineering — Politeknik Negeri Cilacap  
GitHub: [@andinardelina](https://github.com/andinardelinaa)  
LinkedIn: [linkedin.com/in/andinardelina](https://linkedin.com/in/andinardelina)

## 📚 Deskripsi Proyek
Sistem Monitoring Kehadiran ini menggabungkan backend yang dibangun menggunakan CodeIgniter dan frontend menggunakan Laravel 12. Backend menyediakan API untuk operasi CRUD data User, Kelas, dan Mahasiswa, sedangkan frontend bertugas mengonsumsi API tersebut untuk tampilan dan interaksi pengguna.

## 🧬 Setup Instructions (Clone & Install)

### 1️⃣ Clone the Repository Backend Kelompok 4
Clone repository backend dari GitHub:

```bash
git clone https://github.com/NalindraDT/Simon-kehadiran.git
cd Simon-kehadiran
```
### 2️⃣ Install dependensi

Install semua dependensi yang dibutuhkan menggunakan Composer:

```bash
composer install
```

### 🧪 Run Server dalam Backend

```bash
php spark serve 
```
Server akan berjalan di:
🔗 http://127.0.0.1:8080.

### 🧩 Import Database
🔗 Link Repository Database
https://github.com/JiRizkyCahyusna/DBE_Simon

Langkah Import Database:
1. Download file .sql dari repository tersebut.
2. Buka phpMyAdmin atau tools database favoritmu.
3. Pilih database tujuan, lalu klik tab Import.
4. Upload file .sql yang sudah didownload.
5. Klik tombol Go untuk memulai proses import.

### 🧬 Cek Endpoint API menggunakan postman

A. User

- GET user : http://localhost:8080/user
- POST user : http://localhost:8080/user
- PUT user : http://localhost:8080/user/{id_user}
- DELETE user : http://localhost:8080/user/{id_user}

B. Kelas

- GET kelas : http://localhost:8080/kelas
- POST kelas : http://localhost:8080/kelas
- PUT kelas : http://localhost:8080/kelas/{id_kelas}
- DELETE kelas : http://localhost:8080/kelas/{id_kelas}

C. Mahasiswa

- GET mahasiswa : http://localhost:8080/mahasiswa
- POST mahasiswa : http://localhost:8080/mahasiswa
- PUT mahasiswa : http://localhost:8080/mahasiswa/{npm}
- DELETE mahasiswa : http://localhost:8080/mahasiswa/{npm}

## ⚙️ Buat Project Laravel 

``` bash
composer create-project laravel/laravel FE_kehadiran
cd laravel-FE_kehadiran
```
karena menggunakan laravel versi 12 maka perlu dilakukan migrasi:
```bash
php artisan migrate
```
menjalankan server Front-End dengan perintah :

```bash
php artisan serve
```
Server berjalan di:
🔗 http://127.0.0.1:8000

## 🎨 Membuat Dashboard Frontend dengan Tailwind CSS
1. Buat Layout Utama
Buat file resources/views/layouts/main.blade.php dan isi dengan kode berikut:

```bash
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard </title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      background: linear-gradient(to right, #e6fff5, #d0f5eb);
    }
    <style>
/* Overlay */
.overlay {
    position: fixed;
    top: 0; left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.5);
    visibility: hidden;
    opacity: 0;
    transition: visibility 0s, opacity 0.3s ease;
    z-index: 1000;
}
.overlay:target {
    visibility: visible;
    opacity: 1;
}

/* Popup Box */
.popup {
    margin: 100px auto;
    padding: 20px;
    background: #fff;
    border-radius: 10px;
    width: 400px;
    position: relative;
}
.popup .close {
    position: absolute;
    top: 10px; right: 15px;
    text-decoration: none;
    font-size: 24px;
    color: #333;
}
</style>

  </style>
</head>
<body class="flex font-sans text-gray-800">

  <!-- Sidebar -->
  <aside class="w-64 min-h-screen bg-white shadow-lg p-6 fixed left-0 top-0">
    <h1 class="text-2xl font-bold text-emerald-600 mb-10">🟢 DASHBOARD</h1>
    <nav class="flex flex-col gap-4">
      <a href="/dashboard" class="text-emerald-700 font-semibold hover:text-emerald-500">🏠 Dashboard</a>
      <a href="/user" class="text-gray-600 hover:text-emerald-500">📁 User</a>
      <a href="/mahasiswa" class="text-gray-600 hover:text-emerald-500">📁 Mahasiswa</a>
      <a href="/kelas" class="text-gray-600 hover:text-emerald-500">📁 Kelas</a>


    </nav>
    
  </aside>

  <!-- Main Content -->
  <main class="ml-64 w-full p-10">
    <!-- Hero Section -->
      @yield('content')
  </main>

</body>
</html>
```

## Membuat Routes dalam File web.php
Langkah awal adalah mendefinisikan route yang akan mengarahkan pengguna ke halaman dashboard dan halaman CRUD user:
```bash
Route::get('/', function () {
    return view('layouts.dashboard');
});
```

```bash
Route::get('/dashboard', [DashboardController::class, 'index']);
```

## Membuat Controller
Untuk menangani logika dari fitur CRUD user, dibuat sebuah controller baru bernama UserController menggunakan perintah Artisan berikut:
```bash
php artisan make:controller UserController
```
selanjutnya membuat tampilan frontend menggunakan Laravel yang dapat melakukan **CRUD** dengan mengonsumsi API di atas.


