<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daniel Bara Seftino : 5026231169</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Fonts: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" xintegrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <style>
        /* Apply font and a new light theme */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa; /* Clean, light grey background */
            color: #212529; /* Dark text for high contrast */
        }

        /* Full-width hero header with a modern gradient */
        .hero-header {
            padding: 4rem 2rem;
            margin-bottom: -2rem; /* Pull the navbar up for an overlapping effect */
            background-image: linear-gradient(45deg, #6366f1, #a855f7);
            color: #ffffff;
            position: relative;
            z-index: 1; /* Ensure header is behind the navbar */
        }

        .hero-header h1 {
            font-weight: 600;
            color: #ffffff; /* White text for visibility */
        }

        /* Glass effect for the navbar only */
        .glass-navbar {
            background: rgba(255, 255, 255, 0.6); /* Semi-transparent white for a frosted look */
            -webkit-backdrop-filter: blur(10px);
            backdrop-filter: blur(10px);
            border-radius: 1.75rem; /* iOS-style rounded corners */
            border: 1px solid rgba(255, 255, 255, 0.8);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            margin: 0 2rem 2rem 2rem;
            position: relative;
            z-index: 2; /* Ensure navbar is on top of the header */
        }

        /* Styling for individual nav items */
        .glass-navbar .nav-item {
            border-radius: 1.25rem; /* Pill shape */
            transition: background-color 0.3s ease, box-shadow 0.3s ease, transform 0.3s ease;
        }

        /* Glowing effect on individual nav item hover */
        .glass-navbar .nav-item:hover {
            background-color: rgba(255, 255, 255, 0.5);
            transform: translateY(-3px); /* Lift effect */
            box-shadow: 0 0 20px rgba(168, 85, 247, 0.5); /* Glowing purple shadow */
        }

        .glass-navbar .nav-link {
            color: #343a40; /* Darker text for readability on the light glass */
            transition: color 0.3s ease;
            padding: 0.5rem 1rem; /* Adjust padding for better shape */
        }

        .glass-navbar .nav-item:hover .nav-link {
            color: #000000; /* Black on hover for contrast */
        }

        /* Styling for the main content area */
        .content-container {
            padding: 2rem;
        }

    </style>
</head>
<body>

    <div class="jumbotron text-center hero-header">
        <h1>5026231169 : Daniel Bara Seftino</h1>
    </div>

    <nav class="navbar navbar-expand-sm justify-content-center glass-navbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="frontend">All Front End</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/pegawai">Pegawai</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/semen">Tugas CRUD</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">EAS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Latihan 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Latihan 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Latihan 3</a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="content-container">
            @yield('content')
            <p>Ini adalah area konten utama. Anda bisa menempatkan tabel, formulir, atau teks di dalam area ini.</p>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
