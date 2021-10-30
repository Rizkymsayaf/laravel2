<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class BarangSeeder extends Seeder
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
            'varian' =>'besar',
            'harga_beli'=>'1500',
            'harga_jual'=>'2000'],
            ['nama_barang' => 'fresty',
            'varian' =>'kecil',
            'harga_beli'=>'3000',
            'harga_jual'=>'4000'],
            ['nama_barang' => 'coklat',
            'varian' =>'sedang',
            'harga_beli'=>'12000',
            'harga_jual'=>'15000'],
            ['nama_barang' => 'sarden',
            'varian' =>'kecil',
            'harga_beli'=>'7000',
            'harga_jual'=>'8000'],
            ['nama_barang' => 'mie',
            'varian' =>'biasa',
            'harga_beli'=>'2500',
            'harga_jual'=>'3000 '],
        ];
        DB::table('barang')->insert($data);
    }
}
