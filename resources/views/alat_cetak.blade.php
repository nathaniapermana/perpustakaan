<!DOCTYPE html>
<html>
<head>
    <title>Laporan Inventaris Alat</title>
    <style>
        body { font-family: 'Times New Roman', Times, serif; padding: 30px; }
        .header { text-align: center; border-bottom: 3px double #000; padding-bottom: 10px; margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { border: 1px solid black; padding: 10px; text-align: left; }
        th { background-color: #f2f2f2; }
        .footer { margin-top: 30px; text-align: right; }
    </style>
</head>
<body onload="window.print()">
    <div class="header">
        <h1>LAPORAN INVENTARIS ALAT</h1>
        <p>Sistem Informasi Perpustakaan v.1.0</p>
    </div>

    <p>Tanggal Cetak: <b>{{ date('d F Y') }}</b></p>
    <p>Dicetak Oleh: <b>{{ Auth::user()->name }} (Admin)</b></p>

    <table>
        <thead>
            <tr>
                <th width="50">No</th>
                <th>Nama Alat</th>
                <th>Total Stok</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($semuaAlat as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item->nama_alat }}</td>
                <td>{{ $item->stok }}</td>
                <td>{{ $item->stok > 0 ? 'Tersedia' : 'Habis' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="footer">
        <p>Dicetak pada: {{ date('H:i:s') }}</p>
        <br><br><br>
        <p>( ____________________ )</p>
        <p>Admin Perpustakaan</p>
    </div>
</body>
</html>