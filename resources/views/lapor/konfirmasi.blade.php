<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi LaporBanjir</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #012c1e;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 500px;
            background: #67dfcf;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            margin: auto;
        }
        h2 {
            color: #27ae60;
            text-align: center;
        }
        .result-item {
            margin-bottom: 15px;
            padding: 10px;
            background: #f9f9f9;
            border-left: 4px solid #27ae60;
        }
        .result-item strong {
            display: inline-block;
            width: 150px;
            color: #333;
        }
        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: #013733;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Konfirmasi Laporan Berhasil</h2>
        <p style="text-align: center; color: #666;">Terima kasih, laporan Anda telah diterima sementara oleh sistem.</p>
        
        <div class="result-item">
            <strong>Nama Pelapor:</strong> {{ $nama }}
        </div>
        <div class="result-item">
            <strong>Lokasi Kejadian:</strong> {{ $lokasi }}
        </div>
        <div class="result-item">
            <strong>Tinggi Genangan:</strong> {{ $tinggi }} cm
        </div>

        <a href="/lapor-banjir">&larr; <strong>Kembali ke Form Pelaporan</strong></a>
    </div>
</body>
</html>