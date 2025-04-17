<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        body {
            font-family: "Times New Roman", Times, serif;
            margin: 6px 20px 5px 20px;
            line-height: 15px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        td, th {
            padding: 4px 3px;
        }
        th {
            text-align: left;
        }
        .text-right {
            text-align: right;
        }
        .text-center {
            text-align: center;
        }
        .border-all, .border-all th, .border-all td {
            border: 1px solid;
        }
    </style>
</head>
<body>
    <h3 class="text-center">LAPORAN DATA KATEGORI</h3>

    <table class="border-all">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th>Kode Kategori</th>
                <th>Nama Kategori</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kategori as $k)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td>{{ $k->kategori_kode }}</td>
                    <td>{{ $k->kategori_nama }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>