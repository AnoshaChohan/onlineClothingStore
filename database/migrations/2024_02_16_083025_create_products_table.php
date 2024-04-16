<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    
        public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('category');
            $table->decimal('price', 8, 2);
            $table->string('size'); // Adding the size column
            $table->timestamps();
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
