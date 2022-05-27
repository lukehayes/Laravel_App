<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Developer';
        $user->email = 'developer@example.com';
        $user->email_verified_at = \Carbon\Carbon::now();
        $user->password = password_hash('password', PASSWORD_DEFAULT);
        $user->save();
    }
}
