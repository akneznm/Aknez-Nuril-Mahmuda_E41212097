<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Maritim extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('maritims')->insert([
            'nama_kapal' => 'Kapal Feri',
            'jenis_kapal' => 'Kapal penumpang',
            'nomor_seri' => '98328',
            'tahun_dibuat' => '2027'
        ]);
    }
}
