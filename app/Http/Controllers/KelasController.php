<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas; 
use Illuminate\Support\Facades\Http;


class KelasController extends Controller
{
    public function index()
{
    $response = Http::get('http://localhost:8080/kelas');

    // Cek status dan ambil datanya
    if ($response->successful()) {
        $datas = $response->json(); // ubah JSON ke array
    } else {
        $datas = []; // atau kasih pesan error
    }

    return view('kelas', ['datas' => $datas]);
}

    public function create()
    {
        return view('tambah_kelas');
    }

   public function store(Request $request)
{
    $request->validate([
        'kode_kelas' => 'required',
        'nama_kelas' => 'required',
    ]);

    $response = Http::asForm()->post('http://localhost:8080/kelas', [
        'kode_kelas' => $request->kode_kelas,
        'nama_kelas' => $request->nama_kelas,
    ]);

    // Tambahkan ini untuk debug
    if (!$response->successful()) {
        dd('Gagal!', $response->status(), $response->body());
    }

    return redirect('/kelas')->with('success', 'Data berhasil ditambahkan!');

}

public function show($id)
{
    // 
}

 public function edit($kode_kelas)
{
    $response = Http::get("http://localhost:8080/kelas/$kode_kelas");

    if ($response->successful()) {
        $data = $response->json();

        if (!empty($data)) {
            $kelas = $data; // langsung assign, karena bukan array di dalam array
            return view('edit_kelas', compact('kelas', 'kode_kelas'));
        }
    }

    return back()->with('error', 'Gagal mengambil data kelas');
}




public function update(Request $request, $kelas)
{
    $request->validate([
        'kode_kelas' => 'required',
        'nama_kelas' => 'required',
    ]);

    $response = Http::put("http://localhost:8080/kelas/$kelas", [
        'kode_kelas' => $request->kode_kelas,
        'nama_kelas' => $request->nama_kelas,
    ]);

    if ($response->successful()) {
        // dd($kode_kelas); 
        return redirect()->route('kelas.index')->with('success', 'Data berhasil diperbarui');
    }

    return back()->with('error', 'Gagal memperbarui data');
}


   public function destroy($kode_kelas)
{
    $response = Http::delete("http://localhost:8080/kelas/$kode_kelas");

    if ($response->successful()) {
        return redirect()->route('kelas.index')->with('success', 'Data berhasil DIhapus!');
    }

    return back()->with('error', 'Gagal Menghapus Data');
}


}
