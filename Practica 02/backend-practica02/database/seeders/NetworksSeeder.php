<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Networks;

class NetworksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Networks::create([
            'name'=> 'Instagram',
            'url'=> 'https://www.instagram.com/naaato_/',
            'user_id'=> 1,
        ]);
        Networks::create([
            'name'=> 'Linkedin',
            'url'=> 'https://www.linkedin.com/in/renato-ignacio-morales-costancio-a5463a296/',
            'user_id'=> 1,
        ]);
        Networks::create([
            'name'=> 'Twitter',
            'url'=> 'https://twitter.com/naatoooo_',
            'user_id'=> 1,
        ]);
    }
}
