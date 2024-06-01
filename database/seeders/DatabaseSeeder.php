<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelDrivers;

use App\Models\Admin;
use App\Models\Driver;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        Admin::factory()->create();




        Driver::truncate();

        Driver::create([
            'name' => 'Driver 1',
            'gender' => 'male',
            'age' => 22,
            'email' => 'example@gmail.com',
            'phone' => '09123456789',
            'address' => 'Address 1',
        ]);

        Driver::create([
            'name' => 'Driver 2',
            'gender' => 'male',
            'age' => 22,
            'email' => 'example@gmail.com',
            'phone' => '09123456789',
            'address' => 'Address 1',
        ]);

        Driver::create([
            'name' => 'Driver 3',
            'gender' => 'male',
            'age' => 22,
            'email' => 'example@gmail.com',
            'phone' => '09123456789',
            'address' => 'Address 1',
        ]);

        Driver::create([
            'name' => 'Driver 4',
            'gender' => 'male',
            'age' => 22,
            'email' => 'example@gmail.com',
            'phone' => '09123456789',
            'address' => 'Address 1',
        ]);

        Driver::create([
            'name' => 'Driver 5',
            'gender' => 'male',
            'age' => 22,
            'email' => 'example@gmail.com',
            'phone' => '09123456789',
            'address' => 'Address 1',
        ]);

        Driver::create([
            'name' => 'Driver 6',
            'gender' => 'male',
            'age' => 22,
            'email' => 'example@gmail.com',
            'phone' => '09123456789',
            'address' => 'Address 1',
        ]);

        Driver::create([
            'name' => 'Driver 7',
            'gender' => 'male',
            'age' => 22,
            'email' => 'example@gmail.com',
            'phone' => '09123456789',
            'address' => 'Address 1',
        ]);

        Driver::create([
            'name' => 'Driver 8',
            'gender' => 'male',
            'age' => 22,
            'email' => 'example@gmail.com',
            'phone' => '09123456789',
            'address' => 'Address 1',
        ]);

        Driver::create([
            'name' => 'Driver 9',
            'gender' => 'male',
            'age' => 22,
            'email' => 'example@gmail.com',
            'phone' => '09123456789',
            'address' => 'Address 1',
        ]);

        Driver::create([
            'name' => 'Driver 10',
            'gender' => 'male',
            'age' => 22,
            'email' => 'example@gmail.com',
            'phone' => '09123456789',
            'address' => 'Address 1',
        ]);

        Driver::create([
            'name' => 'Driver 10',
            'gender' => 'male',
            'age' => 22,
            'email' => 'example@gmail.com',
            'phone' => '09123456789',
            'address' => 'Address 1',
        ]);

        Driver::create([
            'name' => 'Driver 11',
            'gender' => 'male',
            'age' => 22,
            'email' => 'example@gmail.com',
            'phone' => '09123456789',
            'address' => 'Address 1',
        ]);

        Driver::create([
            'name' => 'Driver 12',
            'gender' => 'male',
            'age' => 22,
            'email' => 'example@gmail.com',
            'phone' => '09123456789',
            'address' => 'Address 1',
        ]);

        Driver::create([
            'name' => 'Driver 13',
            'gender' => 'male',
            'age' => 22,
            'email' => 'example@gmail.com',
            'phone' => '09123456789',
            'address' => 'Address 1',
        ]);

        Driver::create([
            'name' => 'Driver 14',
            'gender' => 'male',
            'age' => 22,
            'email' => 'example@gmail.com',
            'phone' => '09123456789',
            'address' => 'Address 1',
        ]);

        Driver::create([
            'name' => 'Driver 15',
            'gender' => 'male',
            'age' => 22,
            'email' => 'example@gmail.com',
            'phone' => '09123456789',
            'address' => 'Address 1',
        ]);

        Driver::create([
            'name' => 'Driver 16',
            'gender' => 'male',
            'age' => 22,
            'email' => 'example@gmail.com',
            'phone' => '09123456789',
            'address' => 'Address 1',
        ]);

        Driver::create([
            'name' => 'Driver 17',
            'gender' => 'male',
            'age' => 22,
            'email' => 'example@gmail.com',
            'phone' => '09123456789',
            'address' => 'Address 1',
        ]);

        Driver::create([
            'name' => 'Driver 18',
            'gender' => 'male',
            'age' => 22,
            'email' => 'example@gmail.com',
            'phone' => '09123456789',
            'address' => 'Address 1',
        ]);

        Driver::create([
            'name' => 'Driver 19',
            'gender' => 'male',
            'age' => 22,
            'email' => 'example@gmail.com',
            'phone' => '09123456789',
            'address' => 'Address 1',
        ]);

        Driver::create([
            'name' => 'Driver 20',
            'gender' => 'male',
            'age' => 22,
            'email' => 'example@gmail.com',
            'phone' => '09123456789',
            'address' => 'Address 1',
        ]);

        Driver::create([
            'name' => 'Driver 21',
            'gender' => 'male',
            'age' => 22,
            'email' => 'example@gmail.com',
            'phone' => '09123456789',
            'address' => 'Address 1',
        ]);
    }
}
