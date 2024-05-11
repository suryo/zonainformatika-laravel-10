<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zonainformatika</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <script src="{{ asset('plugin/ckeditor5-build-classic/ckeditor.js') }}"></script>


    <style>
        /* Custom sidebar styles */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 200px;
            background-color: #f0f0f0;
            padding: 20px;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .sidebar ul li {
            margin-bottom: 10px;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: #333;
        }

        /* Main content styles */
        .content {
            margin-left: 220px;
            padding: 20px;
        }

        /* Header styles */
        header {
            height: 80px;
            /* Increased height */
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            /* Adjusted padding */
            text-align: right;
        }

        .navbar-nav {
            display: flex;
            justify-content: flex-end;
        }

        .navbar-nav .nav-item {
            margin-right: 10px;
        }

        /* Footer styles */
        footer {
            background-color: rgb(89, 89, 89);
            color: #fff;
            padding: 10px 0;
            /* Adjusted padding */
            text-align: center;
            height: 40px;
            width: 100%;
            position: fixed;
            bottom: 0;
        }

        /* Logo styles */
        .logo {
            margin-bottom: 20px;
            text-align: center;
        }

        .bi {
            font-family: 'bootstrap-icons';
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: #fff;">Link 1</a>
                        <!-- Warna putih untuk tautan -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: #fff;">Link 2</a>
                        <!-- Warna putih untuk tautan -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: #fff;">Link 3</a>
                        <!-- Warna putih untuk tautan -->
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="logo">
            <a href="{{ route('landing') }}">
                <!-- Your logo image or text goes here -->
                {{-- <h1>Your Logo</h1> --}}
                <img src="{{ asset('assets/image/logo/zonainformatika.jpeg') }}" class="card-img-top" alt="ZonaInfor">
            </a>
        </div>
        <ul>
            <li><a href="{{ route('dashboard') }}" style="color: #333;"><i class="bi bi-house-door"></i> Dashboard</a>
            </li> <!-- Warna biru untuk tautan -->
            <hr>
            <li><a href="{{ route('course_technologies.index') }}" style="color: #333;"><i class="bi bi-laptop"></i>
                    Course Technology</a></li> <!-- Warna biru untuk tautan -->
            <li><a href="{{ route('course_categories.index') }}" style="color: #333;"><i class="bi bi-collection"></i>
                    Course Category</a></li> <!-- Warna biru untuk tautan -->
            <li><a href="{{ route('roadmaps.index') }}" style="color: #333;"><i class="bi bi-map"></i> Course
                    Roadmap</a></li> <!-- Warna biru untuk tautan -->
            <li><a href="{{ route('courses.index') }}" style="color: #333;"><i class="bi bi-book"></i> Courses</a></li>
            <!-- Warna biru untuk tautan -->
            <hr>
            <li><a href="{{ route('orders.index') }}" style="color: #333;"><i class="bi bi-basket"></i> Orders</a></li>
            <!-- Warna biru untuk tautan -->

            <!-- Tombol Logout -->
            <li>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    style="color: #333;"><i class="bi bi-box-arrow-right"></i> Logout</a>
                <!-- Warna biru untuk tautan -->
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </ul>
    </div>

    <!-- Page Content -->
    <div class="content">
        <!-- Main Content -->
        <main>
            <!-- Yield the main content of each page -->
            @yield('content')
        </main>
    </div>

    <!-- Footer -->
    <footer>
        <!-- Add your footer content here -->
        <p>&copy; 2024 Zonainformatika
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                codeBlock: {
                    languages: [{
                            language: 'css',
                            label: 'CSS'
                        },
                        {
                            language: 'html',
                            label: 'HTML'
                        }
                    ]
                }
            })
            .then( /* ... */ )
            .catch( /* ... */ );
    </script>


</body>

</html>
