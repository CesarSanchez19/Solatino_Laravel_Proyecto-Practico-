<?php
// Se importan las clases necesarias para definir la migración
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Crea la tabla 'genres' en la base de datos
        Schema::create('genres', function (Blueprint $table) {
            $table->id(); // Crea una columna 'id' autoincremental y clave primaria
            $table->string('name');  // Crea una columna (string) para el nombre del género
            $table->timestamps(); // Crea dos columnas de marca de tiempo: 'created_at' y 'updated_at'
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('genres');
    }
};
