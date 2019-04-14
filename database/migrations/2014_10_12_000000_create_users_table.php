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

        Schema::create('schools', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('industries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('countries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('code')->nullable();
            $table->timestamps();

        });

        Schema::create('regions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('provinces', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->string('name');
            $table->string('coderegion');
            $table->timestamps();
        });

        Schema::create('districts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->string('name');
            $table->string('coderegion');
            $table->string('codeprovince');
            $table->timestamps();
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

            $table->unsignedInteger('district_id')->nullable();
            $table->foreign('district_id')->references('id')->on('districts');

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

        Schema::create('candidates', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedInteger('profession_id')->nullable();
            $table->foreign('profession_id')->references('id')->on('professions');

            $table->unsignedInteger('country_id')->nullable();
            $table->foreign('country_id')->references('id')->on('countries');

            $table->unsignedInteger('salary')->nullable();
            $table->boolean('graduate')->nullable();
            $table->string('identification_document')->nullable();
            $table->string('objective')->nullable();
            $table->string('name')->nullable();
            $table->string('sexo')->nullable();
            $table->string('birthdate')->nullable();
            $table->string('telephone')->nullable();
            $table->string('address')->nullable();
            $table->text('skills')->nullable();
            $table->string('picture')->nullable();

            $table->unsignedInteger('region_id')->nullable();
            $table->foreign('region_id')->references('id')->on('regions');

            $table->unsignedInteger('district_id')->nullable();
            $table->foreign('district_id')->references('id')->on('districts');

            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies');

            $table->unsignedInteger('profession_id')->nullable();
            $table->foreign('profession_id')->references('id')->on('professions');

            $table->enum('type', [ \App\Job::FULLTIME , \App\Job::PARTIME , \App\Job::FREELANCE ]);

            $table->string('name')->nullable();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->dateTime('start')->nullable();
            $table->dateTime('close')->nullable();
            $table->unsignedInteger('salary')->nullable();
            $table->boolean('disability')->nullable()->default(false);
            $table->string('status')->nullable();

            $table->unsignedInteger('region_id')->nullable();
            $table->foreign('region_id')->references('id')->on('regions');

            $table->unsignedInteger('district_id')->nullable();
            $table->foreign('district_id')->references('id')->on('districts');
            $table->timestamps();
        });

        Schema::create('candidate_job', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies');

            $table->unsignedBigInteger('job_id');
            $table->foreign('job_id')->references('id')->on('jobs');

            $table->timestamps();
        });

        Schema::create('studies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('candidate_id');
            $table->foreign('candidate_id')->references('id')->on('candidates');

            $table->unsignedInteger('school_id');
            $table->foreign('school_id')->references('id')->on('schools');

            $table->enum('status', [\App\Study::ABANDONADO,\App\Study::TERMINADO,\App\Study::CURSANDO]);
            $table->enum('level', [\App\Study::SECUNDARIA,\App\Study::INSTITUTO,\App\Study::UNIVERSIDAD, \App\Study::MAESTRIA,\App\Study::DOCTORADO,\App\Study::OTROS]);
            $table->date('start');
            $table->date('end');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('experiences', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('title');
            $table->date('start');
            $table->date('end');
            $table->text('functions');
            $table->unsignedInteger('peoples');
            $table->unsignedInteger('industry_id');
            $table->foreign('industry_id')->references('id')->on('industries');
            $table->unsignedBigInteger('candidate_id');
            $table->foreign('candidate_id')->references('id')->on('candidates');
            $table->timestamps();
        });

        Schema::create('references', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('title');
            $table->string('telephone');
            $table->string('email');
            $table->string('company');
            $table->unsignedBigInteger('candidate_id');
            $table->foreign('candidate_id')->references('id')->on('candidates');
            $table->unsignedInteger('industry_id');
            $table->foreign('industry_id')->references('id')->on('industries');
            $table->timestamps();
        });

        Schema::create('summaries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('type');
            $table->unsignedInteger('size');
            $table->unsignedInteger('downloads');
            $table->string('url');
            $table->boolean('public')->default(true);

            $table->unsignedBigInteger('candidate_id');
            $table->foreign('candidate_id')->references('id')->on('candidates');

            $table->timestamps();
        });

        Schema::create('presentations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('type');
            $table->unsignedInteger('size');
            $table->unsignedInteger('downloads');
            $table->string('url');
            $table->boolean('public')->default(true);
            $table->unsignedInteger('duration');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->timestamps();
        });

        Schema::create('points', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('experience');
            $table->float('study');
            $table->float('portfolio');
            $table->unsignedBigInteger('candidate_id');
            $table->foreign('candidate_id')->references('id')->on('candidates');
            $table->timestamps();
        });

        Schema::create('rooms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('minutes');
            $table->boolean('recorded');
            $table->string('url');
            $table->string('clave');
            $table->unsignedBigInteger('candidate_id');
            $table->foreign('candidate_id')->references('id')->on('candidates');
            $table->unsignedBigInteger('job_id');
            $table->foreign('job_id')->references('id')->on('jobs');
            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies');
            $table->timestamps();
        });

        Schema::create('certificates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('type');
            $table->unsignedInteger('size');
            $table->unsignedInteger('downloads');
            $table->string('url');
            $table->boolean('public')->default(true);

            $table->unsignedBigInteger('candidate_id');
            $table->foreign('candidate_id')->references('id')->on('candidates');

            $table->timestamps();
        });


        Schema::create('catalogs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('type');
            $table->unsignedInteger('size');
            $table->unsignedInteger('downloads');
            $table->string('url');
            $table->boolean('public')->default(true);

            $table->unsignedBigInteger('candidate_id');
            $table->foreign('candidate_id')->references('id')->on('candidates');

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
        Schema::dropIfExists('countries');
        Schema::dropIfExists('regions');
        Schema::dropIfExists('provinces');
        Schema::dropIfExists('districts');

        Schema::dropIfExists('users');
        Schema::dropIfExists('schools');
        Schema::dropIfExists('industries');

        Schema::dropIfExists('professions');
        Schema::dropIfExists('roles');

        Schema::dropIfExists('companies');
        Schema::dropIfExists('candidates');
        Schema::dropIfExists('jobs');
        Schema::dropIfExists('candidate_job');
        Schema::dropIfExists('studies');
        Schema::dropIfExists('experiences');
        Schema::dropIfExists('references');
        Schema::dropIfExists('summaries');
        Schema::dropIfExists('presentations');
        Schema::dropIfExists('points');
        Schema::dropIfExists('rooms');
        Schema::dropIfExists('certificates');
        Schema::dropIfExists('catalogs');
    }
}
