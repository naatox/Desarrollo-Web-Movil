<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Interests;

class InterestsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Interests::create([
            'name'=> 'Videojuegos',
            'description'=> 'Megustan los videojuegos',
            'user_id'=> 1,
        ]);
        Interests::create([
            'name'=> 'Futbol',
            'description'=> 'fanático de Colo-Colo, lo más grande de chile',
            'user_id'=> 1,
        ]);
        Interests::create([
            'name'=> 'Gym',
            'description'=> 'Me gusta ir al Gym aunque no se note',
            'user_id'=> 1,
        ]);

    }
}
