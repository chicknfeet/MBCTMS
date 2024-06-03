<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelDrivers;

use App\Models\Admin;
use App\Models\Driver;
use App\Models\Schedule;
use App\Models\Checkpoint;
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
        Schedule::truncate();
        Checkpoint::truncate();

        Driver::create([
            'name' => 'Dwight',
            'age' => 45,
            'schedule' => 'JUNE 9 | 5:00 AM',
            'route' => 'MARIVELES -> BALANGA',
            'busno' => 'P-123',
            'conductor' => 'John',
            'dispatcher' => 'Frank',
            'status' => 'Registered'
        ]);

        Driver::create([
            'name' => 'Jay',
            'age' => 34,
            'schedule' => 'JUNE 9 | 5:08 AM',
            'route' => 'MARIVELES -> BALANGA',
            'busno' => 'P-653',
            'conductor' => 'Mark',
            'dispatcher' => 'Bruce',
            'status' => 'UnRegistered'
        ]);

        Driver::create([
            'name' => 'Daniel',
            'age' => 28,
            'schedule' => 'JUNE 9 | 5:016 AM',
            'route' => 'MARIVELES -> BALANGA',
            'busno' => 'P-232',
            'conductor' => 'Juan',
            'dispatcher' => 'Duke',
            'status' => 'Registered'
        ]);

        Driver::create([
            'name' => 'Don',
            'age' => 25,
            'schedule' => 'JUNE 10 | 5:00 AM',
            'route' => 'BALANGA -> MARIVELES',
            'busno' => 'P-231',
            'conductor' => 'Dennis',
            'dispatcher' => 'Jordan',
            'status' => 'UnRegistered'
        ]);

        Driver::create([
            'name' => 'Jamal',
            'age' => 32,
            'schedule' => 'JUNE 10 | 5:08 AM',
            'route' => 'BALANGA -> MARIVELES',
            'busno' => 'P-154',
            'conductor' => 'Allen',
            'dispatcher' => 'Jan',
            'status' => 'Registered'
        ]);

        
        
        Schedule::create([
            'marivelestime' => '5:00 AM',
            'route1' => '->',
            'balangatime' => '6:40 AM',
            'barrier' => '|',
            'balangatimes' => '5:00 AM',
            'route2' => '->',
            'marivelestimes' => '6:40 AM'
        ]);

        Schedule::create([
            'marivelestime' => '5:08 AM',
            'route1' => '->',
            'balangatime' => '6:48 AM',
            'barrier' => '|',
            'balangatimes' => '5:08 AM',
            'route2' => '->',
            'marivelestimes' => '6:48 AM'
        ]);

        Schedule::create([
            'marivelestime' => '5:16 AM',
            'route1' => '->',
            'balangatime' => '6:58 AM',
            'barrier' => '|',
            'balangatimes' => '5:16 AM',
            'route2' => '->',
            'marivelestimes' => '6:58 AM'
        ]);

        Schedule::create([
            'marivelestime' => '5:24 AM',
            'route1' => '->',
            'balangatime' => '7:04 AM',
            'barrier' => '|',
            'balangatimes' => '5:24 AM',
            'route2' => '->',
            'marivelestimes' => '7:04 AM'
        ]);

        Schedule::create([
            'marivelestime' => '5:32 AM',
            'route1' => '->',
            'balangatime' => '7:12 AM',
            'barrier' => '|',
            'balangatimes' => '5:32 AM',
            'route2' => '->',
            'marivelestimes' => '7:12 AM'
        ]);

        Checkpoint::create([
            'busno' => 'P-123',
            'driver' => 'Kevin',
            'departure' => 'MAY 20 | 4:00 AM',
            'arrival' => 'MAY 20 | 5:00 AM'
        ]);

        Checkpoint::create([
            'busno' => 'P-124',
            'driver' => 'Kobe',
            'departure' => 'MAY 20 | 4:08 AM',
            'arrival' => 'MAY 20 | 5:10 AM'
        ]);

        Checkpoint::create([
            'busno' => 'P-125',
            'driver' => 'John',
            'departure' => 'MAY 20 | 4:16 AM',
            'arrival' => 'MAY 20 | 5:20 AM'
        ]);
    }
}