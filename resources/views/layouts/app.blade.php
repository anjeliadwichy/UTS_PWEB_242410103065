<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'KosKita')</title>
    <style>
        :root {
            --primary-color: #3498db;
            --secondary-color: #2c3e50;
            --background-color: #f8f9fa;
            --surface-color: #ffffff;
            --text-color: #333333;
            --border-color: #dee2e6;
            --font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            --border-radius: 8px;
            --box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        body {
            font-family: var(--font-family);
            margin: 0;
            padding: 0;
            background-color: var(--background-color);
            color: var(--text-color);
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 2rem auto;
            padding: 2rem;
            flex-grow: 1;
        }

        .card-style {
            background-color: var(--surface-color);
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            border: 1px solid var(--border-color);
            padding: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .header-title {
            color: var(--secondary-color);
            border-bottom: 2px solid var(--primary-color);
            padding-bottom: 0.5rem;
            margin-bottom: 1.5rem;
        }

        /* ini buwat form */
        .form-group {
            margin-bottom: 1rem;
        }
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
        }
        .form-group input {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid var(--border-color);
            border-radius: var(--border-radius);
            box-sizing: border-box;
        }

        .btn {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: var(--border-radius);
            cursor: pointer;
            text-decoration: none;
            font-weight: 600;
            text-align: center;
            transition: background-color 0.3s;
        }
        .btn-primary {
            background-color: var(--primary-color);
            color: white;
        }
        .btn-primary:hover {
            background-color: #2980b9;
        }

        @media (max-width: 768px) {
            .container {
                width: 95%;
                padding: 1rem;
            }
        }
    </style>
</head>
<body>
    <x-navbar :username="request()->get('username')" />

    <main class="container">
        @yield('content')
    </main>

    <x-footer />

</body>
</html>
