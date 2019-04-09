<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('industries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('countries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();

        });

        Schema::create('regions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();

            $table->unsignedInteger('country_id');
            $table->foreign('country_id')->references('id')->on('countries');
        });

        Schema::create('locales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();

            $table->unsignedInteger('region_id');
            $table->foreign('region_id')->references('id')->on('regions');
        });

        Schema::create('professions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('Nombre del rol de usuario');
            $table->text('description');
            $table->timestamps();
        });

        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('role_id');
            $table->foreign('role_id')->references('id')->on('roles');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedInteger('region_id')->nullable();
            $table->foreign('region_id')->references('id')->on('regions');

            $table->unsignedInteger('locale_id')->nullable();
            $table->foreign('locale_id')->references('id')->on('locales');

            $table->unsignedInteger('industry_id')->nullable();
            $table->foreign('industry_id')->references('id')->on('industries');

            $table->string('ruc')->nullable();
            $table->string('address')->nullable();
            $table->string('logo')->nullable();
            $table->string('website')->nullable();
            $table->string('namesocial')->nullable();
            $table->string('telephone')->nullable();
            $table->string('description')->nullable();
            $table->boolean('verified')->nullable();
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
