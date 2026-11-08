<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $daftarBuku = [
            ['id' => 1, 'judul' => 'Buku A', 'penulis' => 'Penulis A'],
            ['id' => 2, 'judul' => 'Buku B', 'penulis' => 'Penulis B'],
            ['id' => 3, 'judul' => 'Buku C', 'penulis' => 'Penulis C'],
        ];
        return view('buku.index', compact('daftarBuku'));
    }

    public function show(string $id)
    {
        return view('buku.show', compact('id'));
    }

    public function kategori($nama_kategori)
    {
        $semuaBuku = [
            ['judul' => 'Belajar PHP Dasar', 'kategori' => 'coding'],
            ['judul' => 'UI/UX dengan Figma', 'kategori' => 'desain'],
            ['judul' => 'Dasar Laravel 11', 'kategori' => 'coding'],
        ];

        $bukuSesuai = [];
        foreach ($semuaBuku as $buku) {
            if ($buku['kategori'] == strtolower($nama_kategori)) {
                $bukuSesuai[] = $buku;
            }
        }

        return view('buku.kategori', [
            'nama_kategori' => $nama_kategori,
            'daftar_buku' => $bukuSesuai
        ]);
    }
} // <--- INI ADALAH KURUNG PENUTUP CLASS YANG BENAR