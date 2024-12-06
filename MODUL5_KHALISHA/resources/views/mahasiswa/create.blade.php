<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Isi Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #e2ecfa;
        }

        section {
            background-color: #ffffff;
            width: 50%;
            margin: auto;
            margin-top: 50px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .form-control {
            border-radius: 10px;
            background-color: #ffffff;
        }

        .form-control:focus {
            box-shadow: 0 0 10px #E0B0FF;
        }

        .btn-primary {
            background-color: #1cb423;
            border-color: #1cb423;
            color: #000;
        }

        .btn-primary:hover {
            background-color: #1cb423;
            border-color: #1cb423;
        }

        .btn-secondary {
            background-color: #f55528;
            border-color: #f55528;
            color: #000;
        }

        .btn-secondary:hover {
            background-color: #aa2804;
            border-color: #aa2804;
        }

        h2 {
            color: #000000;
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <section>
        <h2><b>Isi Data Mahasiswa</b></h2>
        <form action="{{ route('mahasiswa.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" name="nim" id="nim" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="nama_mahasiswa" class="form-label">Nama Mahasiswa</label>
                <input type="text" name="nama_mahasiswa" id="nama_mahasiswa" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input type="text" name="jurusan" id="jurusan" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="dosen_id" class="form-label">Dosen Pembimbing</label>
                <select name="dosen_id" id="dosen_id" class="form-control" required>
                    <option value="" disabled selected>Pilih Dosen</option>
                    @foreach ($dosens as $dosen)
                        <option value="{{ $dosen->id }}">{{ $dosen->kode_dosen }}</option>
                    @endforeach
                </select>
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
