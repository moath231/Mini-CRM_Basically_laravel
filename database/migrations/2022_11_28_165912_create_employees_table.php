<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('lastName');
            $table->integer('companyId')->unsigned();
            $table->foreign('companyId')
                ->references('id')
                ->on('companymodels')
                ->onDelete('cascade');
            $table->string('email');
            $table->string('phone');
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
