<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form LaporBanjir - BPBD Kabupaten Bandung</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #02422d;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 500px;
            background: #7dd2a7;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            margin: auto;
        }
        h2 {
            color: #2c3e50;
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #8cd0b7;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #34dbdb;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #29b963;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>LaporBanjir BPBD</h2>
        <form action="/lapor-banjir" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama_pelapor">Nama Pelapor:</label>
                <input type="text" id="nama_pelapor" name="nama_pelapor" required>
            </div>
            <div class="form-group">
                <label for="lokasi">Lokasi Kejadian (Kecamatan/Desa):</label>
                <input type="text" id="lokasi" name="lokasi" required>
            </div>
            <div class="form-group">
                <label for="tinggi_genangan">Tinggi Genangan Air (cm):</label>
                <input type="number" id="tinggi_genangan" name="tinggi_genangan" required>
            </div>
            <button type="submit">Kirim Laporan</button>
        </form>
    </div>
</body>
</html>