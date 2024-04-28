<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styles */
        header {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
            position: relative;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
            overflow: hidden;
            transition: 0.5s;
        }

        nav ul li {
            margin-right: 20px;
        }

        section {
            padding: 50px 20px;
            text-align: center;
            margin-bottom: 60px;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            position: fixed;
            /* Mengubah posisi menjadi fixed */
            bottom: 0;
            /* Memastikan footer selalu berada di bagian bawah layar */
            width: 100%;
            /* Lebarnya mengisi seluruh layar */
        }

        /* Media query untuk layar yang lebih kecil (mobile) */
        @media screen and (max-width: 768px) {
            nav ul {
                flex-direction: column;
                position: fixed;
                top: 0;
                left: -200px;
                width: 200px;
                height: 100%;
                background-color: #f0f0f0;
                padding-top: 60px;
                z-index: 1;
                transition: 0.5s;
            }

            nav ul li {
                margin-right: 0;
                text-align: center;
            }

            nav ul li a {
                display: block;
                padding: 10px;
                border-bottom: 1px solid #ccc;
            }

            nav ul li a:hover {
                background-color: #ddd;
            }

            /* Tampilkan navigasi saat tombol hamburger di klik */
            #menu-toggle:checked~nav ul {
                left: 0;
            }

            /* Hamburger menu style */
            #menu-toggle-label {
                display: block;
                position: fixed;
                top: 20px;
                left: 20px;
                z-index: 2;
                cursor: pointer;
            }

            #menu-toggle-label span {
                display: block;
                width: 30px;
                height: 5px;
                background-color: #fff;
                margin-bottom: 5px;
                transition: 0.3s;
            }

            #menu-toggle:checked+#menu-toggle-label span:nth-child(1) {
                transform: rotate(-45deg) translate(-9px, 6px);
            }

            #menu-toggle:checked+#menu-toggle-label span:nth-child(2) {
                opacity: 0;
            }

            #menu-toggle:checked+#menu-toggle-label span:nth-child(3) {
                transform: rotate(45deg) translate(-8px, -8px);
            }

            /* Hide hamburger checkbox */
            #menu-toggle {
                display: none;
            }
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header>
        <div>
            <h3>Skeleton Website</h3>
        </div>
        <!-- Hamburger menu checkbox -->
        <input type="checkbox" id="menu-toggle" hidden>
        <label id="menu-toggle-label" for="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
        </label>
        <!-- Navigasi -->
        <nav>
            <ul>
                <li><a href="/" class="btn btn-link">Home</a></li>
                <li><a href="/about" class="btn btn-link">About</a></li>
                <li><a href="/services" class="btn btn-link">Services</a></li>
                <li><a href="/contact" class="btn btn-link">Contact</a></li>
                @auth
                    <li><a href="{{ route('dashboard') }}" class="btn btn-link">Dashboard</a></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-link">Logout</button>
                        </form>
                    </li>
                @else
                    <li>
                        <a href="{{ route('login') }}" class="btn btn-link">Login</a>
                    </li>
                @endauth
            </ul>
        </nav>
    </header>

    <!-- Content -->
    <section>
        @yield('content')
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2024 ZonaInformatika Surabaya</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
