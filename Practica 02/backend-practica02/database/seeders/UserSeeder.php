<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=> 'Renato',
            'lastname' => 'Morales',
            'summary' =>'Soy oriundo de Santiago y me gusta Colo-Colo, vamos Chile!!',
            'country'=> 'Chile',
            'age'=> 20,
            'career'=> 'Ing. Civil Informática',
            'semester'=> '6',
            'email'=> 'renato.morales@alumnos.ucn.cl',
            'city'=> 'Santiago',

        ]);
    }
}
