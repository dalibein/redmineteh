<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class sosidor extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lines = file('a.txt', FILE_IGNORE_NEW_LINES);
        foreach ($lines as $line) {
            $a = explode(';', $line);

            DB::table('velosipedis')->insert([
                'marka'=> $a[0],
                'type'=> $a[1],
                'age'=> $a[2],
                'date'=> $a[3],
                'speed_count'=> $a[4],
                'color'=> $a[5],
                'weight'=> $a[6],
                'price'=> $a[7],
                'updated_at'=> '2022-01-01',
                'created_at'=> '2022-01-01'
            ]);

          
        }
        
    }
}
