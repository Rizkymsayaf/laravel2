<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class PesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['nama_pelanggan' => 'rizky',
            'nama_barang' =>'susu',
            'qty'=>'200',
            'tgl_pesan'=>'2021-11-1'],
            ['nama_pelanggan' => 'rico',
            'nama_barang' =>'fresty',
            'qty'=>'50',
            'tgl_pesan'=>'2021-11-2'],
            ['nama_pelanggan' => 'sultan',
            'nama_barang' =>'coklat',
            'qty'=>'250',
            'tgl_pesan'=>'2021-11-3'],
            ['nama_pelanggan' => 'nurahman',
            'nama_barang' =>'sarden',
            'qty'=>'500',
            'tgl_pesan'=>'2021-11-4'],
            ['nama_pelanggan' => 'aziz',
            'nama_barang' =>'mie',
            'qty'=>'2000',
            'tgl_pesan'=>'2021-11-5']

        ];
        DB::table('pesanan')->insert($data);
    }
}
