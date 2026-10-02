<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporBanjirController extends Controller
{
    // Menampilkan halaman form pelaporan
    public function index()
    {
        return view('lapor.index');
    }

    // Memproses data inputan dan menampilkan halaman konfirmasi
    public function store(Request $request)
    {
        // Mengambil data dari request form
        $nama = $request->input('nama_pelapor');
        $lokasi = $request->input('lokasi');
        $tinggi = $request->input('tinggi_genangan');

        // Mengirim data sementara ke view konfirmasi
        return view('lapor.konfirmasi', compact('nama', 'lokasi', 'tinggi'));
    }
}