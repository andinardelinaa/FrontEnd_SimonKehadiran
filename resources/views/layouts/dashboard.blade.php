@extends('layouts.main')

@section('content')
<section class="bg-white rounded-3xl shadow-xl p-8 flex flex-col md:flex-row justify-between items-center gap-8">
  <div class="max-w-xl">
    <h2 class="uppercase text-sm text-emerald-600 font-semibold mb-2">Selamat Datang!</h2>
    <h1 class="text-4xl font-bold text-gray-800 leading-tight mb-4">Dashboard Pengelolaan data User, Kelas & Mahasiswa</h1>
    <p class="text-gray-600 text-lg mb-6">
      Pantau, kelola, dan analisa data dengan tampilan yang modern dan mudah dipahami.
      Sistem ini dibuat sebagai latihan untuk evaluasi PBF!
    </p>
  </div>
  <div class="relative w-full max-w-md">
    <img src="https://www.sistemphp.com/wp-content/uploads/2016/04/skripsi-tesis-metode-anp.jpg" alt="Dashboard Ilustrasi" class="rounded-2xl shadow-lg w-full h-auto" />
    <div class="absolute bottom-4 left-4 bg-white p-4 rounded-xl shadow-lg flex items-center gap-4">
    </div>
  </div>
</section>
@endsection
