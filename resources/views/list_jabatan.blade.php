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
        <h1>LIST JABATAN</h1>
    </header>

    @if(count($jabatanList) > 0)
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NIP</th>
                    <th>Pangkat</th>
                    <th>Jabatan</th>
                    <th>Unit Kerja</th>
                    <th>Tahun Mulai</th>
                    <th>Tahun Akhir</th>
                    <th>SK Penugasan</th>
                    <th>Bukti Kinerja</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($jabatanList as $jabatan)
                    <tr>
                        <td>{{ $jabatan->nama }}</td>
                        <td>{{ $jabatan->nip }}</td>
                        <td>{{ $jabatan->pangkat }}</td>
                        <td>{{ $jabatan->jabatan }}</td>
                        <td>{{ $jabatan->unit_kerja }}</td>
                        <td>{{ $jabatan->tahun_mulai }}</td>
                        <td>{{ $jabatan->tahun_akhir }}</td>
                        <td>
                            <a href="{{ asset('storage/' . $jabatan->file_sk_penugasan) }}" target="_blank">
                                Lihat SK Penugasan
                            </a>
                        </td>
                        <td>
                            <a href="{{ asset('storage/' . $jabatan->file_bukti_kinerja) }}" target="_blank">
                                Lihat Bukti Kinerja
                            </a>
                        </td>
                        <td>{{ $jabatan->created_at }}</td>
                        <td>{{ $jabatan->updated_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Tidak ada data</p>
    @endif
</body>
</html>
