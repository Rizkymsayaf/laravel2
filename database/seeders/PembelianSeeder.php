<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PembelianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['nama_barang' => 'susu',
            'nama_supplier' =>'ujang',
            'qty'=>'20',
            'tanggal'=>'2021-10-1'],
            ['nama_barang' => 'fresty',
            'nama_supplier' =>'bambang',
            'qty'=>'25',
            'tanggal'=>'2021-10-2'],
            ['nama_barang' => 'coklat',
            'nama_supplier' =>'mamat',
            'qty'=>'80',
            'tanggal'=>'2021-10-3'],
            ['nama_barang' => 'sarden',
            'nama_supplier' =>'manto',
            'qty'=>'17',
            'tanggal'=>'2021-10-4'],
            ['nama_barang' => 'mie',
            'nama_supplier' =>'asep',
            'qty'=>'25',
            'tanggal'=>'2021-10-5 '],
        ];
        DB::table('pembelian')->insert($data);
    }
}
