<?php

namespace Database\Seeders;

use App\Models\Ppshb;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PpshbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();
        $ppshb = [
            [
                'id_users' => '2',
            ]
        ];
        DB::table('ppshb')->insert($ppshb);
    }
}
