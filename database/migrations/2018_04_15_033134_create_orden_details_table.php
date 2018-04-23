<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdenDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cantidad');
            $table->string('descripcion');
            $table->float('precio', 8, 2);
            $table->timestamps();

            $table->unsignedInteger('idOrdenTrabajo');

            $table->foreign('idOrdenTrabajo')->references('id')->on('orden_trabajos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orden_details');
    }
}
