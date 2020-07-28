<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMailDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mail_data', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('mail_number')->nullable();
            $table->foreignId('mail_id')->constrained('mails');
            $table->foreignId('user_data_id')->constrained('user_data');
            $table->text('add_data');
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('mail_datas');
    }
}
