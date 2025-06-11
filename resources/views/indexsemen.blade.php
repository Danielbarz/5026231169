<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Semen - Daniel Bara Seftino</title>
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
            color: #ffffff;
        }

        /* Glass effect for the navbar only */
        .glass-navbar {
            background: rgba(255, 255, 255, 0.6);
            -webkit-backdrop-filter: blur(10px);
            backdrop-filter: blur(10px);
            border-radius: 1.75rem;
            border: 1px solid rgba(255, 255, 255, 0.8);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            margin: 0 2rem 2rem 2rem;
            position: relative;
            z-index: 2;
        }

        /* Styling for individual nav items */
        .glass-navbar .nav-item {
            border-radius: 1.25rem;
            transition: background-color 0.3s ease, box-shadow 0.3s ease, transform 0.3s ease;
        }

        .glass-navbar .nav-item:hover {
            background-color: rgba(255, 255, 255, 0.5);
            transform: translateY(-3px);
            box-shadow: 0 0 20px rgba(168, 85, 247, 0.5);
        }

        .glass-navbar .nav-link {
            color: #343a40;
            transition: color 0.3s ease;
            padding: 0.5rem 1rem;
        }

        .glass-navbar .nav-item:hover .nav-link {
            color: #000000;
        }

        /* Styling for the main content area */
        .content-container {
            padding: 2rem;
        }

        /* Themed panel for the content */
        .content-panel {
            background-color: #ffffff;
            border-radius: 1.25rem;
            padding: 2rem;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.05);
        }

        /* Search form styling */
        .search-form {
            display: flex;
            gap: 10px;
            max-width: 400px;
        }
        .search-form .form-control {
            border-radius: 0.75rem;
        }
        .search-form .btn {
            border-radius: 0.75rem;
            background-color: #6366f1;
            border-color: #6366f1;
            color: white;
        }

        /* Table styling */
        .table thead th {
            border: none;
            color: #6c757d;
            font-weight: 600;
        }
        .table tbody tr {
            transition: background-color 0.2s ease;
        }
        .table tbody tr:hover {
            background-color: #f1f3f5;
        }
        .table td, .table th {
             vertical-align: middle;
        }

        /* Badge styling for availability status */
        .status-badge {
            padding: 0.3em 0.75em;
            border-radius: 50rem; /* Pill shape */
            font-size: 0.8rem;
            font-weight: 600;
        }
        .status-tersedia {
            background-color: #d1fae5;
            color: #065f46;
        }
        .status-habis {
            background-color: #fee2e2;
            color: #991b1b;
        }

        .btn-primary { border-radius: 0.75rem; background-color: #6366f1; border:none; }
        .btn-success { border-radius: 0.5rem; }
        .btn-danger { border-radius: 0.5rem; }

        /* Pagination Styling */
        .pagination {
            justify-content: center;
        }
        .pagination .page-item .page-link {
            border-radius: 0.5rem;
            margin: 0 3px;
            border: none;
            color: #6366f1;
        }
        .pagination .page-item.active .page-link {
            background-color: #6366f1;
            color: white;
            box-shadow: 0 4px 12px rgba(99, 102, 241, 0.3);
        }
        .pagination .page-item.disabled .page-link {
            color: #adb5bd;
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
            {{-- This is where your Blade content goes, now styled --}}
            <div class="content-panel">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3>Data Semen</h3>
                    <a href="/semen/tambah" class="btn btn-primary">+ Tambah Data Semen Baru</a>
                </div>

                <form action="/semen/cari" method="GET" class="search-form mb-4">
                    <input type="text" class="form-control" name="cari" placeholder="Cari merk semen..">
                    <input type="submit" value="CARI" class="btn btn-info">
                </form>

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Merk Semen</th>
                                <th>Harga Semen</th>
                                <th>Tersedia</th>
                                <th>Berat</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($semen as $p)
                            <tr>
                                <td>{{ $p->merksemen }}</td>
                                <td>Rp {{ number_format($p->hargasemen, 0, ',', '.') }}</td>
                                <td>
                                    @if($p->tersedia == 1)
                                        <span class="status-badge status-tersedia">Tersedia</span>
                                    @else
                                        <span class="status-badge status-habis">Tidak Tersedia</span>
                                    @endif
                                </td>
                                <td>{{ $p->berat }} Kg</td>
                                <td>
                                    <a href="/semen/edit/{{ $p->ID }}" class="btn btn-success btn-sm">Edit</a>
                                    <a href="/semen/hapus/{{ $p->ID }}" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                            {{-- Example Rows for display purposes --}}
                            <tr>
                                <td>Tiga Roda</td>
                                <td>Rp 55.000</td>
                                <td><span class="status-badge status-tersedia">Tersedia</span></td>
                                <td>50 Kg</td>
                                <td>
                                    <a href="#" class="btn btn-success btn-sm">Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                             <tr>
                                <td>Padang</td>
                                <td>Rp 50.000</td>
                                <td><span class="status-badge status-habis">Tidak Tersedia</span></td>
                                <td>40 Kg</td>
                                <td>
                                    <a href="#" class="btn btn-success btn-sm">Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="d-flex justify-content-between align-items-center mt-4">
                    <div class="text-muted">
                        Halaman : {{ $semen->currentPage() }} |
                        Jumlah Data : {{ $semen->total() }} |
                        Data Per Halaman : {{ $semen->perPage() }}
                    </div>
                    <div>
                        {{ $semen->links() }}
                    </div>
                </div>
            </div>
            {{-- End of Blade content section --}}
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
