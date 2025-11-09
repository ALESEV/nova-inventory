<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Inventory - Inventory Management System</title>

    <link rel="icon" type="image/png" href="{{ asset('storage/logo.png') }}">

    @vite('resources/css/app.css')
</head>
<body>
    <header>
        <img src="{{ asset('storage/logo.png') }}" alt="Logo Nova Inventory">
        <h1>Nova Inventory</h1>

        <nav>
            <ul>
                <li>
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li>
                    <a href="{{ route('about') }}">About</a>
                </li>
                <li>
                    <a href="{{ route('contacts') }}">Contacts</a>
                </li>
                <li>
                    <a href="{{ route('login') }}">Login</a>
                </li>
                <li>
                    <a href="{{ route('signup') }}">Sign Up</a>
                </li>
            </ul>
        </nav>

    </header>

    <main>
        @yield("main")
    </main>
</body>
</html>