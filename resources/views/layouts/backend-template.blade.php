<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your App Title</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom sidebar styles */
        .sidebar {
            width: 200px;
            background-color: #f0f0f0;
            padding: 20px;
            float: left;
        }
        .sidebar ul {
            list-style-type: none;
            padding: 0;
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
            margin-left: 220px; /* Adjust margin-left to accommodate sidebar width */
            padding: 20px;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <ul>
            <li><a href="{{ route('course_technologies.index') }}">Course Technology</a></li>
            <li><a href="{{ route('course_categories.index') }}">Course Category</a></li>
            <li><a href="{{ route('roadmaps.index') }}">Course Roadmap</a></li>
            <li><a href="{{ route('courses.index') }}">Courses</a></li>
        </ul>
    </div>

    <!-- Page Content -->
    <div class="content">
        <!-- Header -->
        <header>
            <!-- Add your header content here -->
            <!-- Example: <h1>Your App Name</h1> -->
        </header>

        <!-- Main Content -->
        <main>
            <!-- Yield the main content of each page -->
            @yield('content')
        </main>

        <!-- Footer -->
        <footer>
            <!-- Add your footer content here -->
            <!-- Example: <p>&copy; 2022 Your App. All rights reserved.</p> -->
            
        </footer>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
