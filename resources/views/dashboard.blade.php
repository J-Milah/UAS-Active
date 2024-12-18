<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- CSS Internal -->
    <style>
        /* Styling untuk seluruh halaman */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 900px;
            margin: 50px auto;
            padding: 20px;
        }

        /* Card styling */
        .card {
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        .card-header {
            background-color: #007bff;
            color: white;
            padding: 15px;
            font-size: 24px;
            text-align: center;
        }

        .card-body {
            padding: 20px;
            text-align: center;
        }

        /* Styling untuk tombol */
        .btn {
            display: inline-block;
            padding: 15px 30px;
            font-size: 18px;
            font-weight: bold;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-success {
            background-color: #28a745;
            color: white;
        }

        .btn-success:hover {
            background-color: #218838;
        }

        /* Styling untuk ikon */
        .btn i {
            margin-right: 10px;
        }

        /* Styling untuk teks */
        .lead {
            font-size: 20px;
            color: #555;
        }

        /* Responsif */
        @media (max-width: 768px) {
            .container {
                padding: 10px;
            }

            .btn {
                width: 100%;
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Dashboard</h1>
            </div>
            <div class="card-body">
                <p class="lead">Selamat datang di dashboard admin. Pilih menu di bawah untuk melanjutkan.</p>
                
                <!-- Menu menuju halaman Destinasi -->
                <a href="{{ route('destinations.index') }}" class="btn btn-success">
                    <i class="bi bi-map"></i> Lihat Destinasi
                </a>
            </div>
        </div>
    </div>
</body>
</html>
