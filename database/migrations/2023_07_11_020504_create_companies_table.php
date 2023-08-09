<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('id_type');
            $table->string('id_number');
            $table->tinyInteger('check_digit');
            $table->string('business_name');
            $table->string('address');
            $table->string('country');
            $table->string('city');
            $table->string('main_phone_number');
            $table->string('second_phone_number')->nullable();
            $table->string('email');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
