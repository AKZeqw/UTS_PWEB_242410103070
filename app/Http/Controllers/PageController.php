<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function processLogin(Request $request)
    {
        $username = $request->input('username');
        return redirect()->route('dashboard', ['username' => $username]);
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username', 'Guest');
        return view('dashboard', compact('username'));
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->query('username', 'Guest');
        
        $barangs = [
            [
                'id' => 1,
                'nama' => 'Indomie Goreng',
                'kategori' => 'Makanan',
                'stok' => 150,
                'harga' => 3500
            ],
            [
                'id' => 2,
                'nama' => 'Aqua 600ml',
                'kategori' => 'Minuman',
                'stok' => 200,
                'harga' => 4000
            ],
            [
                'id' => 3,
                'nama' => 'Sabun Lifebuoy',
                'kategori' => 'Kebersihan',
                'stok' => 80,
                'harga' => 5500
            ],
            [
                'id' => 4,
                'nama' => 'Tissue Nice',
                'kategori' => 'Kebersihan',
                'stok' => 60,
                'harga' => 8000
            ],
            [
                'id' => 5,
                'nama' => 'Kopi Kapal Api',
                'kategori' => 'Minuman',
                'stok' => 120,
                'harga' => 2000
            ],
            [
                'id' => 6,
                'nama' => 'Susu Ultra 1L',
                'kategori' => 'Minuman',
                'stok' => 50,
                'harga' => 18000
            ]
        ];
        
        return view('pengelolaan', compact('barangs', 'username'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username', 'Guest');
        return view('profile', compact('username'));
    }

    public function logout()
    {
        return redirect()->route('login')->with('message', 'Anda telah berhasil logout');
    }
}
