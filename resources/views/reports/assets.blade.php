<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Inventaris Aset</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { 
            width: 100%; 
            border-collapse: collapse; 
            margin-top: 20px;
            table-layout: fixed; /* Pastikan tabel tetap konstan */
        }
        th, td { 
            border: 1px solid black; 
            padding: 8px; 
            font-size: 12px; 
            text-transform: capitalize;
            word-break: break-word; 
            white-space: normal; 
            
            vertical-align: top; /* Pastikan semua teks sejajar ke atas */
        }

        td {
            text-align: left;
        }
`
        th { 
            background-color: #f2f2f2; 
            text-align: center;
        }
        h2, h3 { text-align: center; }
        h2 { font-size: 18px; }
        h3 { font-size: 14px; }
        .no-transform { text-transform: none; }

        /* Tentukan lebar kolom */
        col.kode-barang { width: 15%; }
        col.nama-barang { width: 20%; }
        col.nomor-register { width: 10%; }
        col.merk-type { width: 15%; }
        col.bahan { width: 8%; }
        col.tahun-pembelian { width: 10%; }
        col.harga { width: 10%; }
        col.keterangan { width: 10%; }

        @media print {
            .page-break {
                display: block;
                page-break-before: always;
            }
        }

    </style>
</head>
<body>

    <h3>Laporan Inventaris dan Aset</h3>
    <h2>Badan Kepegawaian dan Pengembangan Sumber Daya Manusia</h2>
    <h2>Kabupaten Boyolali</h2>

    <!-- Tabel Intra Kompatabel -->
    <h3>Aset Intra Kompatabel</h3>
    <table>
        <colgroup>
            <col class="kode-barang">
            <col class="nama-barang">
            <col class="nomor-register">
            <col class="merk-type">
            <col class="bahan">
            <col class="tahun-pembelian">
            <col class="harga">
            <col class="keterangan">
        </colgroup>
        <thead>
            <tr>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Nomor Registrasi</th>
                <th>Merk/Type</th>
                <th>Bahan</th>
                <th>Tahun Pembelian</th>
                <th>Harga</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($intra as $item)
                <tr>
                    <td>{{ $item->kode_barang }}</td>
                    <td>{{ $item->nama_barang }}</td>
                    <td>{{ $item->nomor_register }}</td>
                    <td>{{ $item->merk_type }}</td>
                    <td>{{ $item->bahan }}</td>
                    <td>{{ $item->tahun_pembelian }}</td>
                    <td>Rp {{ $item->harga }}</td>
                    <td>{{ $item->keterangan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Tabel Ekstra Kompatabel -->
    <h3 class="page-break">Aset Ekstra Kompatabel</h3>
    <table>
        <colgroup>
            <col class="kode-barang">
            <col class="nama-barang">
            <col class="nomor-register">
            <col class="merk-type">
            <col class="bahan">
            <col class="tahun-pembelian">
            <col class="harga">
            <col class="keterangan">
        </colgroup>
        <thead>
            <tr>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Nomor Registrasi</th>
                <th>Merk/Type</th>
                <th>Bahan</th>
                <th>Tahun Pembelian</th>
                <th>Harga</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ekstra as $item)
                <tr>
                    <td>{{ $item->kode_barang }}</td>
                    <td>{{ $item->nama_barang }}</td>
                    <td>{{ $item->nomor_register }}</td>
                    <td>{{ $item->merk_type }}</td>
                    <td>{{ $item->bahan }}</td>
                    <td>{{ $item->tahun_pembelian }}</td>
                    <td>Rp {{ $item->harga }}</td>
                    <td>{{ $item->keterangan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
