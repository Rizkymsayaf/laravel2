<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PostsSeeder extends Seeder
{
    /** 
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //membuat sample data dari table posts
        $data = [
            ['title' => 'karina over power',
            'content' =>'lorem ipsum'],
            ['title' => 'belajar laravels',
            'content' => 'lorem ipsum'],
            ['title' => '5 langkah tidak jadi beban keluarga',
            'content' => 'lorem ipsum']
        ];
        DB::table('posts')->insert($data);
    }
}
