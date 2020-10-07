<?php

use Illuminate\Database\Seeder;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Adit',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123456'),
            'email_verified_at' => Carbon::now(),
            'remember_token' => Str::random(10),
            'roles' => 'ADMIN',
            'username' => 'Adityabrillian',
        ]);
    }
}
