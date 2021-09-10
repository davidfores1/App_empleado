<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadoRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleado_role', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->foreignId('empleado_id')->unsigned();
            $table->foreignId('role_id')->unsigned();
            $table->timestamps();

            $table->foreign('empleado_id')->references('id')->on('empleados')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('role_id')->references('id')->on('roles')
            ->onDelete('cascade')
            ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleado_role');
    }
}
