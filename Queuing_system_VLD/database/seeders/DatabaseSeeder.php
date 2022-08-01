<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    public function run()
    {
        \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'name'=>'Võ Lâm Đoan','email'=>'volamdoanzxc1@gmail.com','password'=>bcrypt('volamdoan1'),'idgroup'=>1,'diachi'=>'Quảng Ngãi'
        ]);
        DB::table('users')->insert([
            'name'=>'Lâm Đoan','email'=>'volamdoanzxc3@gmail.com','password'=>bcrypt('volamdoan1'),'idgroup'=>0,'diachi'=>'Hồ Chí Minh'
        ]);
        DB::table('users')->insert([
            'name'=>'Đoan','email'=>'volamdoanzxc8@gmail.com','password'=>bcrypt('volamdoan1'),'idgroup'=>0,'diachi'=>'Sài Gòn'
        ]);
    }
}
