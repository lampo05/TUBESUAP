<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(orange, white);
            font-family: Arial, sans-serif;
        }

        header {
            padding: 20px;
            text-align: center;
            color: white;
            top: 20px;
        }

        form {
            margin: 20px;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        .form-group {
            display: flex;
            justify-content: space-between;
        }

        .form-group select {
            width: 48%;
        }

        .form-group input {
            width: 48%;
        }

        .form-group label[for="tahun_akhir"] {
            margin-left: 4%; 
        }

        button {
            background-color: green;
            color: white;
            padding: 15px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .button-container {
            text-align: right;
        }

        button:hover {
            background-color: darkgreen;
        }
    </style>
</head>
<body>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <header>
        <h1>Memberi latihan/penyuluhan/ penataran/ ceramah pada masyarakat. (terjadwal/terprogram)</h1>
    </header>

    <form action="/formpenyuluhan" method="post" enctype="multipart/form-data">
        @csrf

        <h1>BIODATA</h1>

        <label for="nama">Nama:</label>
        <input type="text" name="nama" required>
        <br>

        <label for="nip">NIP:</label>
        <input type="text" name="nip" required>
        <br>

        <label for="pangkat">Pangkat:</label>
        <input type="text" name="pangkat" required>
        <br>

        <label for="jabatan">Jabatan:</label>
        <input type="text" name="jabatan" required>
        <br>

        <label for="unit_kerja">Unit Kerja:</label>
        <input type="text" name="unit_kerja" required>
        <br>

        <h1>PROGRAM/KEGIATAN</h1>

        <label for="tingkat">Tingkatan:</label>
        <select name="tingkat" id="tingkat" required>
            <option value=""></option>
            <option value="Lokal">Lokal</option>
            <option value="Nasional">Nasional</option>
            <option value="Internasional">Internasional</option>
        </select>
        <br>

        <label for="deskripsi">Deskripsikan:</label>
        <input type="text" name="deskripsi" required>
        <br>


        <div class="form-group">
            <label for="tahun_mulai">Tahun Mulai:</label>
            <select id="tahun_mulai" name="tahun_mulai" required>
                @for ($i = 2023; $i >= 1980; $i--)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>

            <label for="tahun_akhir">Tahun Akhir:</label>
            <select id="tahun_akhir" name="tahun_akhir" required>
                @for ($i = 2023; $i >= 1980; $i--)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
        </div>

        <label for="file_sk_penugasan">File SK Penugasan (PDF):</label>
        <input type="file" name="file_sk_penugasan" accept=".pdf" required>
        <br>

        <label for="file_bukti_kinerja">File Bukti Kinerja (PDF):</label>
        <input type="file" name="file_bukti_kinerja" accept=".pdf" required>
        <br>

        <div class="button-container">
            <button type="submit">Kirim</button>
        </div>
    </form>
</body>
</html>
