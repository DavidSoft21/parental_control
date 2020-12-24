<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->text('numero_documento',255);
            $table->text('primer_nombre',255);
            $table->text('segundo_nombre',255)->nullable();
            $table->text('primer_apellido',255);
            $table->text('segundo_apellido',255);
            $table->text('direccion',255);
            $table->text('celular',10);
            $table->date('fecha_nacimiento');
            $table->unsignedBigInteger('ciudad_id');
            $table->unsignedBigInteger('padre_id')->nullable();
            $table->unsignedBigInteger('madre_id')->nullable();
            $table->foreign('ciudad_id')->references('id')->on('ciudades')->onDelete('cascade');
            $table->char('sexo',1);
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
        Schema::dropIfExists('personas');
    }
}
