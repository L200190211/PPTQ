<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();
        $users = [[
            'username' => 'Super Admin',
            'name' => 'Super Admin Akses',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('superadmin'),
            'password_real' => 'superadmin',
            'admin' => 'super_admin',
            'no_tlp' => '085801411465',
            'address' => 'Jakarta, Indonesia',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]
    ];
    DB::table('users')->insert($users);
}
}
