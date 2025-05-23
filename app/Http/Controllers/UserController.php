<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 
use Illuminate\Support\Facades\Http;
use Barryvdh\DomPDF\Facade\Pdf;



class UserController extends Controller
{
    public function index(Request $request)
{
    $search = $request->query('search');

    $response = Http::get('http://localhost:8080/user');

    if ($response->successful()) {
        $datas = $response->json();

        if ($search) {
            $datas = array_filter($datas, function($item) use ($search) {
                return stripos($item['username'], $search) !== false;
            });
        }
    } else {
        $datas = [];
    }

    return view('user', ['datas' => $datas]);
}



    public function create()
    {
        return view('tambah_user');
    }

    public function store(Request $request)
{
    // Validasi input
     $request->validate([
            // 'id_user' => 'required|string|max:255',
            'username' => 'required',
            'password' => 'required',
            'level' => 'required',
        ]);
        $response = Http::asForm()->post('http://localhost:8080/user', [
            // 'id_user' => $request->id_user,
            'username' => $request->username,
            'password' => $request->password,
            'level' => $request->level,
        ]);
        if ($response->successful()) {
            return redirect('/user')->with('success', 'Data berhasil DItambahkan!');
        }
        return back()->with('error', 'Gagal Menambahkan Data');
    
    // Nanti di sini bisa simpan ke database
}
public function show($id)
{
    // 
}

   public function edit($id_user)
{
    $response = Http::get("http://localhost:8080/user/$id_user");

    if ($response->successful()) {
        $data = $response->json(); // atau ['data'] kalau ada pembungkus
        return view('edit_user', compact('data'));
    }

    return redirect()->route('user.index')->with('error', 'Data tidak ditemukan');
}

public function update(Request $request, $id_user)
{
    $request->validate([
        'id_user' =>'required',
        'username' => 'required',
        'password' => 'required',
        'level' => 'required',
    ]);

    $response = Http::asForm()->put("http://localhost:8080/user/$id_user", [
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
    $response = Http::delete("http://localhost:8080/user/$id");

    if ($response->successful()) {
        return redirect()->route('user.index')->with('success', 'Data berhasil DIhapus!');
    }

    return back()->with('error', 'Gagal Menghapus Data');
}

public function exportPDF()
{
    $response = Http::get('http://localhost:8080/user');

    if ($response->successful()) {
        $datas = collect($response->json('data')); // atau $response->json() kalau datanya di root
        dd($response->json());
        
        $pdf = Pdf::loadHTML('cetak_user', compact('datas'));
        return $pdf->download('text.pdf');
    } else {
        return back()->with('error', 'Gagal mengambil data untuk PDF');
    }
}





}