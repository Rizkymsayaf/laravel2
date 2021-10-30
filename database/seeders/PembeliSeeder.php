<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class PembeliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['nama_pembeli' => 'rizky',
            'jenis_kelamin' =>'laki-laki',
            'alamat'=>'jln bojong malaka',
            'kode_pos'=>'40111',
             'kota' => 'bandung',
             'tanggal_lahir' => "2003-11-17"],
             ['nama_pembeli' => 'rico',
             'jenis_kelamin' =>'laki-laki',
             'alamat'=>'jln permata kopo',
             'kode_pos'=>'40112',
              'kota' => 'bandung',
              'tanggal_lahir' => "2003-11-18"],
              ['nama_pembeli' => 'sultan',
              'jenis_kelamin' =>'laki-laki',
              'alamat'=>'margahayu permai',
              'kode_pos'=>'40113',
               'kota' => 'bandung',
               'tanggal_lahir' => "2003-11-19"],
               ['nama_pembeli' => 'nurahman',
               'jenis_kelamin' =>'laki-laki',
               'alamat'=>'cilisung',
               'kode_pos'=>'40114',
                'kota' => 'bandung',
                'tanggal_lahir' => "2003-11-20"],
                ['nama_pembeli' => 'aziz',
                'jenis_kelamin' =>'laki-laki',
                'alamat'=>'bintaro',
                'kode_pos'=>'40115',
                 'kota' => 'bandung',
                 'tanggal_lahir' => "2003-11-21"],

        
        ];
        DB::table('pembeli')->insert($data);
    }
}
