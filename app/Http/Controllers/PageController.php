<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    private $kamarKos = [
        [
            'id' => 1,
            'nama' => 'Kamar Melati Tipe A',
            'tipe' => 'Standard',
            'harga' => 850000,
            'fasilitas' => 'Kipas Angin, Kasur, Lemari, Kamar Mandi Luar',
            'status' => 'Tersedia'
        ],
        [
            'id' => 2,
            'nama' => 'Kamar Mawar Tipe B',
            'tipe' => 'Deluxe',
            'harga' => 1200000,
            'fasilitas' => 'AC, Kasur, Lemari, Meja Belajar, Kamar Mandi Dalam',
            'status' => 'Tersedia'
        ],
        [
            'id' => 3,
            'nama' => 'Kamar Anggrek Tipe C',
            'tipe' => 'VIP',
            'harga' => 1800000,
            'fasilitas' => 'AC, TV, Kasur King Size, Lemari, Meja Kerja, Kamar Mandi Dalam, Air Panas',
            'status' => 'Terisi'
        ],
        [
            'id' => 4,
            'nama' => 'Kamar Tulip Tipe A',
            'tipe' => 'Standard',
            'harga' => 900000,
            'fasilitas' => 'Kipas Angin, Kasur, Lemari, Kamar Mandi Luar',
            'status' => 'Tersedia'
        ]
    ];

    private $penghuni = [
        'admin' => 2,
        'levi' => 3,
        'mikasa' => 1,
    ];

    public function showLogin()
    {
        return view('login');
    }

    public function handleLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $username = $request->input('username');
        return redirect()->route('dashboard', ['username' => $username]);
    }

    public function showDashboard(Request $request)
    {
        $username = $request->query('username');
        $kamarSaya = null;

        if ($username) {
            $usernameKey = strtolower($username);
            if (array_key_exists($usernameKey, $this->penghuni)) {
                $kamarId = $this->penghuni[$usernameKey];

                foreach ($this->kamarKos as $kamar) {
                    if ($kamar['id'] == $kamarId) {
                        $kamarSaya = $kamar;
                        break;
                    }
                }
            }
        }

        return view('dashboard', ['kamarSaya' => $kamarSaya]);
    }

    public function showPengelolaan()
    {
        return view('pengelolaan', ['kamarKos' => $this->kamarKos]);
    }

    public function showProfile()
    {
        return view('profile');
    }

    public function handleLogout()
    {
        return redirect()->route('login');
    }
}

