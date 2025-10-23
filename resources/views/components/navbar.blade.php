@props(['username' => ''])

<style>
    .navbar {
        background-color: var(--surface-color);
        box-shadow: var(--box-shadow);
        padding: 1rem 5%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 1px solid var(--border-color);
    }
    .navbar .logo {
        font-size: 1.5rem;
        font-weight: bold;
        color: var(--primary-color);
        text-decoration: none;
    }
    .navbar .nav-links {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        gap: 1.5rem;
    }
    .navbar .nav-links a {
        text-decoration: none;
        color: var(--secondary-color);
        font-weight: 600;
        transition: color 0.3s;
    }
    .navbar .nav-links a:hover {
        color: var(--primary-color);
    }
    .navbar .logout-btn {
        background-color: #e74c3c;
        color: white;
        padding: 0.5rem 1rem;
        border-radius: var(--border-radius);
        border: none;
        cursor: pointer;
        font-weight: 600;
    }
    .navbar .logout-btn:hover {
         background-color: #c0392b;
    }
</style>

<nav class="navbar">
    <a href="{{ $username ? route('dashboard', ['username' => $username]) : '#' }}" class="logo">KosKita</a>

    @if($username)
        <ul class="nav-links">
            <li><a href="{{ route('dashboard', ['username' => $username]) }}">Dashboard</a></li>
            <li><a href="{{ route('pengelolaan', ['username' => $username]) }}">Daftar Kos</a></li>
            <li><a href="{{ route('profile', ['username' => $username]) }}">Profile</a></li>
        </ul>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="logout-btn">Logout</button>
        </form>
    @endif
</nav>
