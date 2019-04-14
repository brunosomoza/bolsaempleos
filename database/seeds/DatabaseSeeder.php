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

        // Insertamos Roles en la BD
        factory(\App\Role::class, 1)->create(['name' => 'candidato']);
        factory(\App\Role::class, 1)->create(['name' => 'empresa']);
        factory(\App\Role::class, 1)->create(['name' => 'supervisor']);
        factory(\App\Role::class, 1)->create(['name' => 'vendedor']);
        factory(\App\Role::class, 1)->create(['name' => 'admin']);
        factory(\App\Role::class, 1)->create(['name' => 'invitado']);
        factory(\App\Role::class, 1)->create(['name' => 'anonimo']);

        // Insertamos Pais, Regios y Local
//        factory(\App\Region::class, 10)->create();
//        factory(\App\Region::class, 10)->create(['country_id' => 2]);
//        factory(\App\Locale::class, 10)->create();

        factory(\App\Country::class, 180)->create();
        factory(\App\Industry::class, 10)->create();
        factory(\App\Profession::class,10)->create();

        factory(\App\User::class, 10)->create()
            ->each(function (\App\User $u) {
                factory(\App\Company::class, 1)->create(['user_id' => $u->id]);
            });

        factory(\App\User::class, 10)->create()
            ->each(function (\App\User $u) {
                factory(\App\Candidate::class, 1)->create(['user_id' => $u->id]);
            });

        factory(\App\School::class, 30)->create();
        factory(\App\Job::class, 50)->create();
        factory(\App\Study::class, 15)->create();
        factory(\App\Experience::class, 20)->create();
        factory(\App\Reference::class, 15)->create();
        factory(\App\Summary::class, 10)->create();
        factory(\App\Presentation::class, 15)->create();
        factory(\App\Point::class, 10)->create();
        factory(\App\Room::class, 10)->create();

    }
}


