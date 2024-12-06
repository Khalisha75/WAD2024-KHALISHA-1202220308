<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <style>
        .bg-custom {
            background-color: #6ca7ff !important;
            border-radius: 0 15px 15px 0;
            box-shadow: 3px 0 5px rgba(0, 0, 0, 0.1);
        }
        .nav-link.active {
            font-weight: bold;
        }
        .dropdown-menu {
            background-color: #B0CFFF;
        }
        .dropdown-item:hover {
            background-color: #A0BEEE;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 col-lg-2 bg-custom text-white" style="height: 100vh;">
            <h3 class="text-center mt-4"><b>EAD University</b></h3>
            <ul class="nav flex-column mt-5">
                <li class="nav-item">
                    <a class="nav-link text-white" href="/">Dashboard</a>
                </li>
                <li class="nav-item dropdown mt-3">
                    <a class="nav-link text-white dropdown-toggle" href="#" id="dosenDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dosen</a>
                    <ul class="dropdown-menu" aria-labelledby="dosenDropdown">
                        <li><a class="dropdown-item text-white" href="{{ route('dosen.create') }}">Tambah Dosen</a></li>
                        <li><a class="dropdown-item text-white" href="{{ route('dosen.index') }}">Daftar Dosen</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown mt-3">
                    <a class="nav-link text-white dropdown-toggle" href="#" id="mahasiswaDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Mahasiswa</a>
                    <ul class="dropdown-menu" aria-labelledby="mahasiswaDropdown">
                        <li><a class="dropdown-item text-white" href="{{ route('mahasiswa.create') }}">Tambah Mahasiswa</a></li>
                        <li><a class="dropdown-item text-white" href="{{ route('mahasiswa.index') }}">Daftar Mahasiswa</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <!-- KURANG TAU CARA BIKIN TOMBOL UNTUK NAVIGATE KE HALAMAN LAIN. ERROR TERUS -->
        <div class="col-md-9 col-lg-10" id="mainContent" style="height: 100vh; overflow-y: auto;">
            @if(View::hasSection('content'))
                @yield('content')
            @else
                <div class="d-flex align-items-center justify-content-center" style="height: 100%;">
                    <div class="text-center">
                        <h1 class="display-4">Selamat Datang di Dashboard EAD University</h1>
                        <p class="lead">Kelola data dosen dan mahasiswa</p>
                        <a href="{{ route('dosen.index') }}" class="btn btn-primary mb-3">Daftar Dosen</a>
                        <a href="{{ route('mahasiswa.index') }}" class="btn btn-primary mb-3">Daftar Mahasiswa</a>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
