@extends('layouts.app')
@section('title', 'Pengelolaan Kamar - KosKita')
@section('content')
    <h1 class="header-title">Daftar Kamar Kos</h1>
    <p>Yuk, cek daftar kamar yang tersedia dan temukan pilihan terbaikmu!</p>

    <style>
        .kamar-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 1.5rem;
            padding: 1rem 0;
        }

        .kamar-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            padding: 1.5rem;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .kamar-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0,0,0,0.15);
        }

        .kamar-card h3 {
            margin-top: 0;
            color: var(--primary-color);
        }

        .kamar-card .status {
            font-weight: bold;
            padding: 0.25rem 0.5rem;
            border-radius: 4px;
            display: inline-block;
        }

        .status-tersedia {
            background-color: #d4edda;
            color: #155724;
        }

        .status-terisi {
            background-color: #f8d7da;
            color: #721c24;
        }

        .kamar-card p {
            color: #555;
            margin: 0.4rem 0;
        }

        @media (max-width: 900px) {
            .header-title {
                font-size: 1.6rem;
                text-align: center;
            }
        }

        @media (max-width: 600px) {
            .header-title {
                font-size: 1.4rem;
                text-align: center;
            }

            .kamar-card {
                padding: 1rem;
            }

            .kamar-card h3 {
                font-size: 1.1rem;
            }

            .kamar-card p {
                font-size: 0.9rem;
            }
        }
    </style>

    <div class="kamar-grid">
        @forelse ($kamarKos as $kamar)
            <div class="kamar-card card-style">
                <h3>{{ $kamar['nama'] }}</h3>
                <p><strong>Harga:</strong> Rp {{ number_format($kamar['harga'], 0, ',', '.') }} / bulan</p>
                <p><strong>Status:</strong>
                    <span class="status {{ $kamar['status'] == 'Tersedia' ? 'status-tersedia' : 'status-terisi' }}">
                        {{ $kamar['status'] }}
                    </span>
                </p>
                <p><strong>Fasilitas:</strong></p>
                <p>{{ $kamar['fasilitas'] }}</p>
            </div>
        @empty
            <div class="card-style">
                <p>Belum ada kamar yang tersedia saat ini. Silakan cek kembali nanti, ya!</p>
            </div>
        @endforelse
    </div>
@endsection

