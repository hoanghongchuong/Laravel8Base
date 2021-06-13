<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'email' => 'admin@gmail.com',
                'password' => bcrypt('1qazxsw2'),
                'email_verified_at' => Carbon::now(),
                'name' => 'Admin'
            ],
        );
        User::create(
            [
                'email' => 'chuonghh@gmail.com',
                'password' => bcrypt('1qazxsw2'),
                'email_verified_at' => Carbon::now(),
                'name' => 'Admin'
            ],
        );
    }
}
