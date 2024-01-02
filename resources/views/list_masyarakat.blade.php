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
        <h1>LIST PELAYANAN KEPADA MASYARAKAT</h1>
    </header>

    @if(count($masyarakatList) > 0)
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NIP</th>
                    <th>Pangkat</th>
                    <th>Jabatan</th>
                    <th>Unit Kerja</th>
                    <th>Jenis</th>
                    <th>Deskripsi</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($masyarakatList as $masyarakat)
                    <tr>
                        <td>{{ $masyarakat->nama }}</td>
                        <td>{{ $masyarakat->nip }}</td>
                        <td>{{ $masyarakat->pangkat }}</td>
                        <td>{{ $masyarakat->jabatan }}</td>
                        <td>{{ $masyarakat->unit_kerja }}</td>
                        <td>{{ $masyarakat->jenis }}</td>
                        <td>{{ $masyarakat->deskripsi }}</td>
                        <td>{{ $masyarakat->created_at }}</td>
                        <td>{{ $masyarakat->updated_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Tidak ada data</p>
    @endif
</body>
</html>
