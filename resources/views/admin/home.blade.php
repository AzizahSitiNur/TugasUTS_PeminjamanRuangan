<!-- resources/views/admin/home.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin home</title>
</head>
<body class="antialiased">

    <div class="container mx-auto text-center mt-10">
        <h1>Selamat datang Admin!</h1>

        @auth
            <a href="{{ route('dashboard') }}" class="bg-green-500 text-white px-4 py-2 rounded">Dashboard</a>
        @else
            <a href="{{ route('login') }}" class="bg-blue-500 text-white px-4 py-2 rounded m-2">Login</a>
            <a href="{{ route('register') }}" class="bg-gray-500 text-white px-4 py-2 rounded m-2">Register</a>
        @endauth

    </div>
    <a href="{{ route('ruangans.index') }}">Kelola Ruangan</a>
    
</body>
</html>
