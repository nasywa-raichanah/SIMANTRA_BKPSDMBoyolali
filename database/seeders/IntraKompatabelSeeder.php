<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\IntraKompatabel;

class IntraKompatabelSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'kode_barang' => '02.02.01.01.003',
                'nama_barang' => 'Station Wagon - 13010010012001838',
                'nomor_register' => '000007',
                'merk_type' => 'Toyota / -',
                'bahan' => 'Besi',
                'tahun_pembelian' => 2016,
                'harga' => 290888300,
                'keterangan' => 'Toyota Kijang Innova>>(Mutasi Dari Dinas Pendidikan dan Kebudayaan 2017)',
            ],
            
            [
                'kode_barang' => '02.02.01.01.003',
                'nama_barang' => 'Station Wagon - 13010010012000007',
                'nomor_register' => '000008',
                'merk_type' => 'Toyota / Station Wagon',
                'bahan' => 'Besi',
                'tahun_pembelian' => 2004,
                'harga' => 87400000,
                'keterangan' => 'Toyota Avanza>>(Mutasi Dari Badan Keuangan Daerah (SKPD) 2017)',
            ],

            [
                'kode_barang' => '02.02.01.01.003',
                'nama_barang' => 'Station Wagon - 50160010012000002',
                'nomor_register' => '000010',
                'merk_type' => 'Toyota / Avanza G M/T',
                'bahan' => 'Campuran',
                'tahun_pembelian' => 2011,
                'harga' => 143707100,
                'keterangan' => '',
            ],

            [
                'kode_barang' => '02.02.01.01.003',
                'nama_barang' => 'Station Wagon - 13010010012001910',
                'nomor_register' => '000011',
                'merk_type' => 'Toyota / Grand New Avanza 1.3 G Manual',
                'bahan' => 'Besi',
                'tahun_pembelian' => 2017,
                'harga' => 191880500,
                'keterangan' => '',
            ],

            [
                'kode_barang' => '02.02.01.04.001 ',
                'nama_barang' => 'Sepeda Motor - 19010010012000006',
                'nomor_register' => '000006',
                'merk_type' => 'Suzuki / Sepeda Motor',
                'bahan' => 'Besi',
                'tahun_pembelian' => 2007,
                'harga' => 10360000,
                'keterangan' => '',
            ],

            [
                'kode_barang' => '02.02.01.04.001 ',
                'nama_barang' => 'Sepeda Motor - ',
                'nomor_register' => '000009',
                'merk_type' => 'Honda / Sepeda Motor',
                'bahan' => 'Besi',
                'tahun_pembelian' => 2003,
                'harga' => 12082000,
                'keterangan' => '',
            ],

            [
                'kode_barang' => '02.02.02.01.008',
                'nama_barang' => 'Baggage And Mail Cart - 19010010012002582',
                'nomor_register' => '0000001',
                'merk_type' => '-',
                'bahan' => '-',
                'tahun_pembelian' => 2013,
                'harga' => 1998000,
                'keterangan' => 'Trolly Supermarket',
            ],

            [
                'kode_barang' => '02.03.01.09.017',
                'nama_barang' => 'Bak Air - 19010010012000015',
                'nomor_register' => '000001',
                'merk_type' => '-',
                'bahan' => 'Plastik',
                'tahun_pembelian' => 2014,
                'harga' => 13600000,
                'keterangan' => 'Tangki pemdam 4000 ltr (Tandon air)',
            ],

            [
                'kode_barang' => '02.03.01.09.017',
                'nama_barang' => 'Bak Air - ',
                'nomor_register' => '000002',
                'merk_type' => '-',
                'bahan' => 'Alumunium',
                'tahun_pembelian' => 2014,
                'harga' => 2250000,
                'keterangan' => 'Tangki air 1000 liter',
            ],

            [
                'kode_barang' => '02.03.01.09.017',
                'nama_barang' => 'Bak Air - 19010010012000017',
                'nomor_register' => '000003',
                'merk_type' => '-',
                'bahan' => 'Alumunium',
                'tahun_pembelian' => 2014,
                'harga' =>2250000,
                'keterangan' => 'Tangki air 1000 liter',
            ],

            [
                'kode_barang' => '02.05.01.04.001 ',
                'nama_barang' => 'Lemari Besi/Metal - 19010010012000040 ',
                'nomor_register' => '000004',
                'merk_type' => '-',
                'bahan' => 'Besi',
                'tahun_pembelian' => 2008,
                'harga' =>  25566000,
                'keterangan' => '',
            ],

            [
                'kode_barang' => '02.05.01.04.001 ',
                'nama_barang' => 'Lemari Besi/Metal - 19010010012000041 ',
                'nomor_register' => '000005',
                'merk_type' => '-',
                'bahan' => 'Besi',
                'tahun_pembelian' => 2008,
                'harga' =>  25566000,
                'keterangan' => '',
            ],

            [
                'kode_barang' => '02.05.01.04.001 ',
                'nama_barang' => 'Lemari Besi/Metal - 19010010012000042 ',
                'nomor_register' => '000006',
                'merk_type' => '-',
                'bahan' => 'Besi',
                'tahun_pembelian' => 2008,
                'harga' =>  25566000,
                'keterangan' => '',
            ],

            [
                'kode_barang' => '02.05.01.04.001 ',
                'nama_barang' => 'Lemari Besi/Metal - 19010010012000043 ',
                'nomor_register' => '000007',
                'merk_type' => '-',
                'bahan' => 'Besi',
                'tahun_pembelian' => 2008,
                'harga' =>  5000000,
                'keterangan' => '',
            ],
            // Tambahkan data lainnya...
        ];

        foreach ($data as $item) {
            IntraKompatabel::updateOrCreate(['nomor_register' => $item['nomor_register']], $item);
        }
    }
}
