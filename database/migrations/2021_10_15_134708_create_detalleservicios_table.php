<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleserviciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalleservicios', function (Blueprint $table) {
            $table->id();
            $table->integer('numerodeordenservicio');
            $table->String('detalleservicio');
            $table->date('fechaatencon');

            $table->timestamps();

            $table->foreignId("id_servicio")->constrained("servicios");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalleservicios');
    }
}
