@extends('layouts.app')
@section('title', 'Dashboard - KosKita')
@section('content')

<style>
    .dashboard-hero {
        background-color: var(--surface-color);
        border: 1px solid var(--border-color);
        border-radius: var(--border-radius);
        padding: 2.5rem;
        text-align: center;
        box-shadow: var(--box-shadow);
    }
    .dashboard-hero h2 {
        margin-top: 0;
        font-size: 2.2rem;
        color: var(--secondary-color);
    }
    .dashboard-hero p {
        font-size: 1.1rem;
        color: #555;
    }
    .dashboard-hero .cta-button {
        display: inline-block;
        margin-top: 1.5rem;
        padding: 0.8rem 1.8rem;
        background-color: var(--primary-color);
        color: white;
        text-decoration: none;
        font-weight: 600;
        border-radius: var(--border-radius);
        transition: background-color 0.3s;
    }
    .dashboard-hero .cta-button:hover {
        background-color: #2980b9;
    }

    .current-room-section {
        margin-top: 2.5rem;
    }
    .my-room-card {
        background: linear-gradient(135deg, #f8f9fa, #ffffff);
    }
    .my-room-card h4 {
        color: var(--primary-color);
        font-size: 1.4rem;
        margin-top: 0;
        margin-bottom: 1rem;
    }
    .no-room-message {
        text-align: center;
        padding: 2rem;
        background-color: #f8f9fa;
        border: 1px dashed var(--border-color);
    }
</style>

<div class="dashboard-hero">
    @if(request()->get('username'))
        <h2>Hai, <strong>{{ request()->get('username') }}</strong>! 👋</h2>
        <p>Senang melihatmu kembali di <strong>KosKita</strong> 🏠. Selamat menjalani hari dengan start di KosKita!</p>
        <a href="{{ route('pengelolaan', ['username' => request()->get('username')]) }}" class="cta-button">
            Cari Kamar Kos
        </a>
    @else
        <h2>Selamat datang di <strong>KosKita</strong> 🏠</h2>
        <p>Temukan kenyamanan dan kemudahan dalam mengelola kos impianmu di sini.</p>
    @endif
</div>

<div class="current-room-section">
    <h3 class="header-title">Kamar Anda Saat Ini</h3>

    @if($kamarSaya)
        <div class="my-room-card card-style">
            <h4>{{ $kamarSaya['nama'] }}</h4>
            <p><strong>Harga:</strong> Rp {{ number_format($kamarSaya['harga'], 0, ',', '.') }} / bulan</p>
            <p><strong>Tipe:</strong> {{ $kamarSaya['tipe'] }}</p>
            <p><strong>Fasilitas:</strong></p>
            <p>{{ $kamarSaya['fasilitas'] }}</p>
        </div>
    @else
        <div class="no-room-message card-style">
            <p>Anda saat ini belum menyewa kamar.</p>
            <p>Silakan lihat daftar kamar kami untuk menemukan yang cocok untuk Anda!</p>
        </div>
    @endif
</div>

@endsection

