<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Bigint;
use Illuminate\Support\Double;
use Illuminate\Support\Facades\Storage;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $url = __DIR__ . '/';
        if (($contents  = fopen($url . "a.txt", "r")) !== FALSE){
            while (($data = fgetcsv($contents, 0, ";")) !== FALSE){
                $list[] = $data;
                DB::table('velosipedis')->insert([
                    'marka' => $data,
                    'type' => $data,
                    'age' => $data,
                    'date' => $data,
                    'speed_count' => $data,
                    'color' => $data,
                    'weight' => $data,
                    'price' => $data
                ]);
            }
            fclose($contents);

        }
    }
}
