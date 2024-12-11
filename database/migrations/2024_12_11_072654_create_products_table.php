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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();   // Category name
            $table->text('description')->nullable();  // Optional description
            $table->timestamps();
        });
        
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');               
            $table->unsignedBigInteger('category_id'); 
            $table->string('size')->nullable();     
            $table->decimal('price', 8, 2);            
            $table->string('sex')->nullable();       
            $table->string('image')->nullable();    
            $table->text('description')->nullable();    
        
       
            $table->boolean('status')->comment('1:In Stock ,0:Stock Out')->default(1);       
            $table->boolean('is_favorite')->comment('1:Yes,0:No')->default(0); 
        
            $table->timestamps();
        
            // Define foreign key constraint
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {   
        Schema::dropIfExists('products');
        Schema::dropIfExists('categories');
        
    }
};
