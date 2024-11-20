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
        Schema::create('posts', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name', 255)->nullable();
            $table->string('image_path')->nullable();
            $table->boolean('is_active')->default(1);
            $table->text('details')->nullable();
            $table->date('date')->default(date('Y-m-d'));
            $table->timestamps();
        });
        for ($i=10; $i < 56 ; $i++) { 
            \App\Models\Post::create(['name'=> 'Dummy-'.$i, 'details' => 'Leorem Ipsum Dummy Content.']);
        }
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
