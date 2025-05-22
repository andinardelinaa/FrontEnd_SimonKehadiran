<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard </title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      background: linear-gradient(to right,rgb(118, 240, 100),rgb(222, 223, 213));
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
    <h1 class="text-2xl font-bold text-emerald-600 mb-10">🟢 MYDASH</h1>
    <nav class="flex flex-col gap-4">
      <a href="/dashboard" class="text-emerald-700 font-semibold hover:text-emerald-500 no-underline">🏠 Dashboard</a>
      <a href="/user" class="text-gray-600 hover:text-emerald-500 no-underline">📁 User</a>
      <a href="/mahasiswa" class="text-gray-600 hover:text-emerald-500 no-underline">📁 Mahasiswa</a>
      <a href="/kelas" class="text-gray-600 hover:text-emerald-500 no-underline">📁 Kelas</a>


    </nav>
    
  </aside>

  <!-- Main Content -->
  <main class="ml-64 w-full p-10">
    <!-- Hero Section -->
      @yield('content')
  </main>

</body>
</html>
