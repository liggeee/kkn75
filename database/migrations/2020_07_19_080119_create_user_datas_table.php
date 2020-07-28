<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('nik');
            $table->string('nkk');
            $table->string('name');
            $table->string('street');
            $table->string('born');
            $table->foreignId('gender_id')->constrained('genders');
            $table->foreignId('job_id')->constrained();
            $table->foreignId('education_id')->constrained('educations');
            $table->foreignId('marital_id')->constrained('marital_status');
            $table->foreignId('religion_id')->constrained('religions');
            $table->date('birthdate');
            $table->string('img');
            $table->string('rt');
            $table->string('rw');
            $table->string('dusun');
            $table->string('village')->default('Jenggawah');
            $table->string('district')->default('Jenggawah');
            $table->string('city')->default('Jember');
            $table->string('provincy')->default('Jawa Timur');
            $table->smallInteger('status')->default(0);
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
        Schema::dropIfExists('user_datas');
    }
}
