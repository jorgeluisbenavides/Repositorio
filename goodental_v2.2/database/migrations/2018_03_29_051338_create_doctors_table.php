<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->increments('id');
            $table->mediumtext('name');
            $table->mediumtext('last_name_one');
            $table->mediumtext('last_name_two');
            $table->text('speciality');
            $table->text('professional_license');
            $table->text('graduate_university');//procedencia
            $table->enum('sex',['MALE','FEMALE'])->default('MALE');
            $table->integer('cell_phone');
            $table->integer('home_phone');
            $table->mediumtext('img_name');
			$table->enum('status',['ACTIVE','DISABLED'])->default('ACTIVE');
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
        Schema::dropIfExists('doctors');
    }
}
