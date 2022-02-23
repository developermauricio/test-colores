<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \Spatie\Permission\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'Administrador']);
        Role::create(['name' => 'Usuario']);
    }
}