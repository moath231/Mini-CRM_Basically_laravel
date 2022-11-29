<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('companymodels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('Email');
            $table->string('Address');
            $table->string('website');
            $table->string('logo_path');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('companymodels');
    }
};
