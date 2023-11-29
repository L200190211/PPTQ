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
        $users = [
            [
                'username' => 'Super Admin',
                'name' => 'Super Admin Akses',
                'email' => 'superadmin@gmail.com',
                'password' => bcrypt('superadmin'),
                'password_real' => 'superadmin',
                'nisn' => '',
                'admin' => 'super_admin',
                'no_tlp' => '085801411465',
                'asal_sekolah' => '',
                'address' => 'Jakarta, Indonesia',
                'tempat_lahir' => 'Sukoharjo',
                'tgl_lahir' => date("Y-m-d H:i:s"),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'username' => 'Moh Anas',
                'name' => 'Moh Anas Urbaningrum',
                'email' => 'anas@gmail.com',
                'password' => bcrypt('anas12'),
                'password_real' => 'anas12',
                'nisn' => '338901299827626',
                'admin' => 'user',
                'no_tlp' => '085804511463',
                'address' => 'Pati, Indonesia',
                'asal_sekolah' => 'SD Negeri 1 Dummy',
                'tempat_lahir' => 'Semarang',
                'tgl_lahir' => date("Y-m-d H:i:s"),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'username' => 'Sigit Nugroho',
                'name' => 'Sigit Nugroho',
                'email' => 'sigit12@gmail.com',
                'password' => bcrypt('sigit12'),
                'password_real' => 'sigit12',
                'nisn' => '338901299827626',
                'admin' => 'user',
                'no_tlp' => '085804511463',
                'address' => 'Pati, Indonesia',
                'asal_sekolah' => 'SD Negeri 2 Dummy',
                'tempat_lahir' => 'Semarang',
                'tgl_lahir' => date("Y-m-d H:i:s"),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ]
        ];
        DB::table('users')->insert($users);
    }
}
