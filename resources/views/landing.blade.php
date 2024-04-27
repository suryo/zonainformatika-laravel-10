<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
</head>
<body>
    <!-- Header -->
    <header>
        <div>
            <h1>Skeleton Website</h1>
        </div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            
                @auth <!-- Memeriksa apakah pengguna sudah login -->
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit">Logout</button>
                        </form>
                    </li>
                @else <!-- Jika pengguna belum login -->
                    <li>
                        <a href="{{ route('login') }}">Login</a>
                    </li>
                @endauth
                
            </ul>
        </nav>
    </header>

    <!-- Content -->
    <section>
        <h2>Welcome to Our Website</h2>
        <p>This is the landing page content.</p>
        @auth <!-- Memeriksa apakah pengguna sudah login -->
            <div>
                Welcome {{ auth()->user()->name }} ({{ auth()->user()->email }})
                {{-- @dd(auth()->user()) --}}
            </div>
        @endauth

        @php
        if(auth()->user()){
            $user = auth()->user();
            $role = $user->role ?? null; // Dapatkan peran pengguna, jika ada
            $roleId = auth()->user()->role_id; // Dapatkan ID peran pengguna
            $userRole = auth()->user()->getRole($roleId); // Panggil metode getRole() dengan ID peran pengguna
        }
        @endphp

        @if(isset($userRole))
        <p>Role: {{ $userRole->role }}</p> <!-- Tampilkan peran pengguna jika ada -->
        @endif
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 ZonaInformatika Surabaya</p>
    </footer>
</body>
</html>
