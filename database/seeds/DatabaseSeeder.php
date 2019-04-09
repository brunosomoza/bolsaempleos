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
        Storage::makeDirectory('courses');
        Storage::makeDirectory('courses2');
        Storage::deleteDirectory('courses2');
        Storage::deleteDirectory('courses');
        // Insertamos Roles en la BD
        factory(\App\Role::class, 1)->create(['name' => 'candidato']);
        factory(\App\Role::class, 1)->create(['name' => 'empresa']);
        factory(\App\Role::class, 1)->create(['name' => 'supervisor']);
        factory(\App\Role::class, 1)->create(['name' => 'vendedor']);
        factory(\App\Role::class, 1)->create(['name' => 'admin']);
        factory(\App\Role::class, 1)->create(['name' => 'invitado']);
        factory(\App\Role::class, 1)->create(['name' => 'anonimo']);

        // Insertamos Pais, Regios y Local
        factory(\App\Country::class, 180)->create();
        factory(\App\Region::class, 10)->create();
        factory(\App\Region::class, 10)->create(['country_id' => 2]);
        factory(\App\Locale::class, 10)->create();

        factory(\App\Industry::class, 10)->create();
        factory(\App\Profession::class,10)->create();

        factory(\App\User::class, 10)->create()
            ->each(function (\App\User $u) {
                factory(\App\Company::class, 1)->create(['user_id' => $u->id]);
            });


    }
}


