@extends('layouts.app')
@section('title', 'Login - KosKita')
@section('content')

<div class="login-container card-style" style="max-width: 450px; margin: 2rem auto;">
    <h1 class="header-title" style="text-align: center;">Login Akun</h1>
    <p style="text-align: center; margin-top: -1rem; margin-bottom: 2rem; color: #777;">Selamat datang di KosKita! Silakan masuk.</p>

    <form action="{{ route('login.handle') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Masukkan username anda" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Masukkan password anda" required>
        </div>

        <button type="submit" class="btn btn-primary" style="width: 100%;">Login</button>
    </form>
</div>
@endsection
