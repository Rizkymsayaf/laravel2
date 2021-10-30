<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SuplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['nama_suplier' => 'deden',  'alamat' =>'jln rancamnyar','kode_pos'=>'42221',  'kota'=>'bandung'],
            ['nama_suplier' => 'faisal',
            'alamat' =>'jln buah batu',
            'kode_pos'=>'42222',
            'kota'=>'bandung'],
            ['nama_suplier' => 'dandi',
            'alamat' =>'soreang',
            'kode_pos'=>'42223',
            'kota'=>'bandung'],
            ['nama_suplier' => 'anton',
            'alamat' =>'jln Dago',
            'kode_pos'=>'42224',
            'kota'=>'bandung'],
            ['nama_suplier' => 'edi',
            'alamat' =>'jln soekarno hatta',
            'kode_pos'=>'42225',
            'kota'=>'bandung'],
            

        ];
        DB::table('suplier')->insert($data);
    }
}
