<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $count = User::count();

        if(!$count) {
            $faker = Faker::create();
            User::create([
                'name' => 'imrankabir02',
                'first_name' => 'Imran',
                'last_name' => 'Kabir',
                'email' => 'imrankabir325@gmail.com',
                'email_verified_at' => now(),
                'phone' => '+8801614126363',
                'phone_verified_at' => now(),
                'password' => bcrypt('password'),
                'role' => 'admin'
            ]);

            for($i=0; $i<10; $i++) {
                User::create([
                    'name' => $faker->username,
                    'first_name' => $faker->firstname,
                    'last_name' => $faker->lastname,
                    'email' => $faker->email,
                    'email_verified_at' => now(),
                    'phone' => '+8801614' . rand(100,999) . rand(100, 999),
                    'phone_verified_at' => now(),
                    'password' => bcrypt('password'),
                    'role' => 'user'
                ]);
            }
        }
    }
}
