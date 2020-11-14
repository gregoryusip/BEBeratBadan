<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WeightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('weights')->insert([
            'tanggal' => '2018-08-18',
            'maxi' => 50,
            'mini' => 48,
            'perbedaan' => 2
        ]);
    }
}
