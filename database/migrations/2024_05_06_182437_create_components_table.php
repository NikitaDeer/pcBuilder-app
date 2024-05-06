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
        Schema::create('components', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('name');
            $table->string('manufacturer');
            $table->text('specifications')->nullable(); // Характеристики можно хранить в JSON-формате
            $table->decimal('price', 8, 2);
            // $table->string('image')->nullable(); // Ссылка на изображение или путь к файлу
            $table->text('image')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('components');
    }
};
