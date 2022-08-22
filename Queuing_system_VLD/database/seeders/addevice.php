<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class addevice extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<8;$i++){
            DB::table('device')->insert([
              'device_name'=>'kiosk',
              'device_id'=>'192.168.1.10',
              'device_status'=>mt_rand(1,2),
              'device_conection'=>mt_rand(1,2),
              'device_title'=>'Khám tim mạch, khám mắt',

            ]);
        }
    }
}
