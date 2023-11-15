<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technologies;

class TechnologiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Technologies::create([
            'name'=> 'Laravel',
            'percentage' => 45,
            'year' => '2023',
            'user_id'=> 1,
        ]);
        Technologies::create([
            'name'=> 'Angular',
            'percentage' => 25,
            'year' => '2023',
            'user_id'=> 1,
        ]);
        Technologies::create([
            'name'=> 'React',
            'percentage' => 15,
            'year' => '2023',
            'user_id'=> 1,
        ]);
        Technologies::create([
            'name'=> 'MySql',
            'percentage' => 85,
            'year' => '2022',
            'user_id'=> 1,
        ]);
        Technologies::create([
            'name'=> 'Java',
            'percentage' => 88,
            'year' => '2022',
            'user_id'=> 1,
        ]);
        Technologies::create([
            'name'=> 'Python',
            'percentage' => 95,
            'year' => '2021',
            'user_id'=> 1,
        ]);
        Technologies::create([
            'name'=> 'C++',
            'percentage' => 65,
            'year' => '2022',
            'user_id'=> 1,
        ]);
        Technologies::create([
            'name'=> 'C#',
            'percentage' => 65,
            'year' => '2022',
            'user_id'=> 1,
        ]);
    }
}
