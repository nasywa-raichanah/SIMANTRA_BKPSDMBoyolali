
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Inventaris Aset</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid black; padding: 8px; font-size:12px; text-transform: capitalize; }
        th { background-color: #f2f2f2; text-align: center; }
        td { text-align: left; }
        h2, h3 { text-align:center; }
        h2 { font-size: 18px; }
        h3 { font-size: 14px; }
        .no-transform {
            text-transform: none; /* Tidak mengubah huruf */
        }
    </style>
</head>
<body>
    <h3>Laporan Inventaris dan Aset</h3>
    <h2>Badan Kepegawaian dan Pengembangan Sumber Daya Manusia</h2>
    <h2>Kabupaten Boyolali</h2>
    <table>
        <thead>
            <tr>
                <th>Nama Barang</th>
                <th>Kode Barang</th>
                <th>Kategori</th>
                <th>Lokasi</th>
                <th>Kondisi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($assets as $asset)
                <tr>
                    <td>{{ $asset->nama_barang }}</td>
                    <td class="no-transform">{{ $asset->kode_barang }}</td>
                    <td>{{ $asset->kategori }}</td>
                    <td>{{ $asset->lokasi_barang }}</td>
                    <td>{{ $asset->kondisi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
