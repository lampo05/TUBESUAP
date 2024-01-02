<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Jabatan</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            background: linear-gradient(orange, white);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            background-attachment: fixed;
        }

        header {
            background-color: orange;
            padding: 10px;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 20px;
        }

        header h1 {
            color: white;
        }

        table {
            border-collapse: collapse;
            width: 80%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: orange;
            color: white;
        }

        a {
            color: blue;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        p {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>LIST LATIHAN/PENYULUHAN/PENATARAN</h1>
    </header>

    @if(count($penyuluhanList) > 0)
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NIP</th>
                    <th>Pangkat</th>
                    <th>Jabatan</th>
                    <th>Unit Kerja</th>
                    <th>Tingkat</th>
                    <th>Deskripsi</th>
                    <th>Tahun Mulai</th>
                    <th>Tahun Akhir</th>
                    <th>SK Penugasan</th>
                    <th>Bukti Kinerja</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($penyuluhanList as $penyuluhan)
                    <tr>
                        <td>{{ $penyuluhan->nama }}</td>
                        <td>{{ $penyuluhan->nip }}</td>
                        <td>{{ $penyuluhan->pangkat }}</td>
                        <td>{{ $penyuluhan->jabatan }}</td>
                        <td>{{ $penyuluhan->unit_kerja }}</td>
                        <td>{{ $penyuluhan->tingkat }}</td>
                        <td>{{ $penyuluhan->deskripsi }}</td>
                        <td>{{ $penyuluhan->tahun_mulai }}</td>
                        <td>{{ $penyuluhan->tahun_akhir }}</td>
                        <td>
                            <a href="{{ asset('storage/' . $penyuluhan->file_sk_penugasan) }}" target="_blank">
                                Lihat SK Penugasan
                            </a>
                        </td>
                        <td>
                            <a href="{{ asset('storage/' . $penyuluhan->file_bukti_kinerja) }}" target="_blank">
                                Lihat Bukti Kinerja
                            </a>
                        </td>
                        <td>{{ $penyuluhan->created_at }}</td>
                        <td>{{ $penyuluhan->updated_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Tidak ada data</p>
    @endif
</body>
</html>
