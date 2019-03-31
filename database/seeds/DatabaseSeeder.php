<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Role::class, 1)->create(['name' => 'candidato']);
        factory(\App\Role::class, 1)->create(['name' => 'empresa']);
        factory(\App\Role::class, 1)->create(['name' => 'supervisor']);
        factory(\App\Role::class, 1)->create(['name' => 'vendedor']);
        factory(\App\Role::class, 1)->create(['name' => 'admin']);
        factory(\App\Role::class, 1)->create(['name' => 'invitado']);
        factory(\App\Role::class, 1)->create(['name' => 'anonimo']);
    }
}


