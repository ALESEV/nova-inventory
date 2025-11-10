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
    <header class="bg-red-500">
        <div class="container mx-auto flex justify-between items-center py-5">
            
            <a class="flex items-center" href="{{ route('home') }}">
                <img class="w-10" src="{{ asset('storage/logo.png') }}" alt="Logo Nova Inventory">
                <h1 class="text-white">Nova Inventory</h1>                
            </a>

            <nav>
                <ul class="flex justify-between gap-3">
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
        </div>

    </header>



    <main>
        @yield("main")
    </main>
</body>
</html>