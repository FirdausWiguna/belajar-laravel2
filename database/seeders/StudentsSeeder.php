<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            "namalengkap" => "David Lutfi",
            "nis" => 12220010,
            "jk" => "L",
            "created_at" => date("Y-m-d H:i:s"),
        ]);
        DB::table('students')->insert([
            "namalengkap" => "Muthia",
            "nis" => 12220025,
            "jk" => "P",
            "created_at" => date("Y-m-d H:i:s"),
        ]);
        DB::table('students')->insert([
            "namalengkap" => "Syawali",
            "nis" => 12220082,
            "jk" => "L",
            "created_at" => date("Y-m-d H:i:s"),
        ]);
    }
}
