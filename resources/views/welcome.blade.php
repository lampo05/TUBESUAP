<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Your Laravel App</title>
    <style>
        
        body {
            margin: 0;
            padding: 50px;
            height: 100vh;
            background: linear-gradient(orange, white);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            background-attachment: fixed;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .menu-box {
            width: 48%;
            box-sizing: border-box;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
        }

        .menu-box p {
            margin-bottom: 10px;
        }

        h1 {
            color: white;
            position: absolute;
            top: 20px; 
        }

        p {
            margin-bottom: 20px;
        }

        button {
            padding: 10px;
            margin: 5px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-pilih {
            background-color: green;
            color: white;
            margin-left: 10px;
        }

        .btn-lihat {
            background-color: white;
            color: black;
            margin-right: 10px;
        }

        
    </style>
</head>
<body>
    <h1>PENGABDIAN</h1> 
    <div class="container">

        <div class="menu-box">
            <p>
                Menduduki jabatan pimpinan pada lembaga pemerintahan/pejabat negara yang harus dibebaskan dari jabatan organiknya. (tiap semester)
            </p>
            <button class="btn-pilih" onclick="window.location.href='/form'">Pilih</button>
            <button class="btn-lihat" onclick="window.location.href='/list-jabatan'">Lihat List</button>
        </div>

        <div class="menu-box">
            <p>
                Melaksanakan pengembangan hasil pendidikan dan penelitian yang dapat dimanfaatkan oleh masyarakat/industri. (tiap program)
            </p>
            <button class="btn-pilih" onclick="window.location.href='/formpengembangan'">Pilih</button>
            <button class="btn-lihat" onclick="window.location.href='/list-pengembangan'">Lihat List</button>
        </div>

        <div class="menu-box">
            <p>
                Membuat/menulis karya pengabdian pada masyarakat yang tidak dipublikasikan, tiap karya
            </p>
            <button class="btn-pilih" onclick="window.location.href='/formjurnal'">Pilih</button>
            <button class="btn-lihat" onclick="window.location.href='/list-jurnal'">Lihat List</button>
        </div>

        <div class="menu-box">
            <p>
                Hasil kegiatan pengabdian kepada masyarakat yang dipublikasikan di sebuah berkala/jurnal pengabdian kepada masyarakat atau teknologi tepat guna, merupakan diseminasi dari luaran program kegiatan pengabdian kepada masyarakat, tiap karya
            </p>
            <button class="btn-pilih" onclick="window.location.href='/formpublikasi'">Pilih</button>
            <button class="btn-lihat" onclick="window.location.href='/list-publikasi'">Lihat List</button>
        </div>

        <div class="menu-box">
            <p>
                Memberi latihan/penyuluhan/penataran/ceramah pada masyarakat. (terjadwal/terprogram)
            </p>
            <button class="btn-pilih" onclick="window.location.href='/formpenyuluhan'">Pilih</button>
            <button class="btn-lihat" onclick="window.location.href='/list-penyuluhan'">Lihat List</button>
        </div>

        <div class="menu-box">
            <p>
                Memberi pelayanan kepada masyarakat atau kegiatan lain yang menunjang pelaksanaan tugas umum pemerintah dan pembangunan
            </p>
            <button class="btn-pilih" onclick="window.location.href='/formmasyarakat'">Pilih</button>
            <button class="btn-lihat" onclick="window.location.href='/list-masyarakat'">Lihat List</button>
        </div>

        <div class="menu-box">
            <p>
                Berperan serta aktif dalam pengelolaan jurnal ilmiah (per tahun)
            </p>
            <button class="btn-pilih" onclick="window.location.href='/formilmiah'">Pilih</button>
            <button class="btn-lihat" onclick="window.location.href='/list-ilmiah'">Lihat List</button>
        </div>
    </div>
</body>
</html>
