<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('registry', function (Blueprint $table) {
            $table->id();
            $table->string('category_material');
            $table->string('name_material');
            $table->string('serial_number');
            $table->string('inventory_number');
            $table->string('region');
            $table->string('emp_first');
            $table->string('emp_second');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registry');
    }
};
