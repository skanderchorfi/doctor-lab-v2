<?php

namespace Database\Seeders;

use App\Models\Admin;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i = 6; $i < 10; $i++)
        {
            Admin::create([
                'name' => $faker->userName,
                'email' => "admin-$i@example.com",
                'password' => Hash::make('admin')
            ]);
        }
    }
}
