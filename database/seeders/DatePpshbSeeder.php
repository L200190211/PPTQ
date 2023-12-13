<?php

namespace Database\Seeders;

use App\Models\DatePpshb;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatePpshbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();
        $date_ppshb = [
            [
                'id' => 1,
            ],
        ];
        DB::table('date_ppshb')->insert($date_ppshb);
    }
}
