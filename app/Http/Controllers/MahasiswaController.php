<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa; 
use Illuminate\Support\Facades\Http;


class MahasiswaController extends Controller
{
    public function index()
{
    $response = Http::get('http://localhost:8080/mahasiswa');

    // Cek status dan ambil datanya
    if ($response->successful()) {
        $datas = $response->json(); // ubah JSON ke array
    } else {
        $datas = []; // atau kasih pesan error
    }

    return view('mahasiswa', ['datas' => $datas]);
}

   public function create()
{
    $kelas = Http::get('http://localhost:8080/kelas')->json();
    $users = Http::get('http://localhost:8080/user')->json();

    return view('tambah_mahasiswa', compact('kelas', 'users'));
}


    public function store(Request $request)
{
    
    // Validasi input
    $request->validate([
    'npm' => 'required',
    'nama_mahasiswa' => 'required',
    'email' => 'required',
    'kode_kelas' => 'required',
    'id_user' => 'required',
]);

       $response = Http::asForm()->post("http://localhost:8080/mahasiswa", [
    'npm' => $request->npm,
    'nama_mahasiswa' => $request->nama_mahasiswa,
    'email' => $request->email,
    'kode_kelas' => $request->kode_kelas,
    'id_user' => $request->id_user,
]);
        if ($response->successful()) {
            return redirect('/mahasiswa')->with('success', 'Data berhasil DItambahkan!');
        }
        return back()->with('error', 'Gagal Menambahkan Data');
    
    // Nanti di sini bisa simpan ke database
}
public function show($id)
{
    // 
}

   public function edit($npm)
{
     $kelass = Http::get('http://localhost:8080/kelas')->json();
    $userss = Http::get('http://localhost:8080/user')->json();

    $response = Http::get("http://localhost:8080/mahasiswa/$npm");

    if ($response->successful()) {
        $data = $response->json(); // atau ['data'] kalau ada pembungkus
        return view('edit_mahasiswa', compact('data'));
    }

    return redirect()->route('mahasiswa.index')->with('error', 'Data tidak ditemukan');
}

public function update(Request $request, $npm)
{
    $request->validate([
        'id_user' =>'required',
        'username' => 'required',
        'password' => 'required',
        'level' => 'required',
    ]);

    $response = Http::asForm()->put("http://localhost:8080/mahasiswa/$npm", [
        'id_user' =>$request->id_user,
        'username' => $request->username,
        'password' => $request->password,
        'level' => $request->level,
    ]);

    if ($response->successful()) {
        return redirect()->route('user.index')->with('success', 'Data berhasil diperbarui');
    }

    return back()->with('error', 'Gagal memperbarui data');
}


   public function destroy($id)
{
    $response = Http::delete("http://localhost:8080/mahasiswa/$id");

    if ($response->successful()) {
        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil DIhapus!');
    }

    return back()->with('error', 'Gagal Menghapus Data');
}


}
