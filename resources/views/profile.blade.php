@extends('layouts.app')
@section('title', 'Profil Pengguna - KosKita')
@section('content')
    <div class="card-style">
        <h1 class="header-title">Profil Pengguna</h1>

        <div class="profile-info">
            <style>
                .profile-info p { font-size: 1.1rem; line-height: 1.8; }
                .profile-info strong { color: var(--secondary-color); }
            </style>

            <p><strong>Username:</strong> {{ request()->get('username', 'Guest') }}</p>
            <p><strong>Role:</strong> Pengunjung</p>
            <p><strong>Status Akun:</strong> Aktif</p>
            <p>Terima kasih sudah menjadi bagian dari <strong>KosKita</strong>. Jadikan kos ini sebagai tempat ternyamanmu ya!</p>
        </div>
    </div>
@endsection
