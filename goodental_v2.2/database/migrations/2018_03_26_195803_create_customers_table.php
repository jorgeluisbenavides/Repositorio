<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('folio')->nullable();
            $table->mediumtext('name');
            $table->mediumtext('last_name_one');
            $table->mediumtext('last_name_two');
            $table->text('address')->nullable();
            $table->text('references')->nullable();
            $table->integer('age')->nullable()->unsigned();
            $table->mediumtext('cell_phone')->nullable();
            $table->mediumtext('home_phone')->nullable();
            $table->enum('sex',['Masculino','Femenino'])->default('Masculino'); //posibles valores, en 
            $table->enum('civil_state',['Soltero','Casado','Viudo'])->default('Soltero'); //posibles valores, en 
            $table->mediumtext('img_name')->nullable() ;
            $table->integer('occupation_id')->unsigned(); //unsigned: valores positivos
			$table->enum('status',['ACTIVE','DISABLED'])->default('ACTIVE');
			
            //Relaciones
            $table->foreign('occupation_id')->references('id')->on('occupations')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            
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
        Schema::dropIfExists('customers');
    }
}
