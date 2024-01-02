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
        <h1>Hasil kegiatan pengabdian kepada masyarakat yang dipublikasikan di sebuah berkala/jurnal pengabdian kepada masyarakat atau teknologi tepat guna, merupakan diseminasi dari luaran program kegiatan pengabdian kepada masyarakat, tiap karya</h1>
    </header>

    <form action="/formpublikasi" method="post" enctype="multipart/form-data">
        @csrf

        <h1>BOIODATA</h1>

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

        <label for="judul">Judul Jurnal:</label>
        <input type="text" name="judul" required>
        <br>

        <label for="file_publikasi">File Jurnal (PDF):</label>
        <input type="file" name="file_publikasi" accept=".pdf" required>
        <br>

        <div class="button-container">
            <button type="submit">Kirim</button>
        </div>
    </form>
</body>
</html>
