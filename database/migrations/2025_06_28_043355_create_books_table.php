<?php
// Importa las clases necesarias para crear una migración.
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Crea la tabla 'books' en la base de datos
        Schema::create('books', function (Blueprint $table) {
            $table->id(); // Crea una columna 'id' autoincremental y clave primaria
            $table->string('title');  // Columna (string) para el título del libro
            $table->integer('year'); // Columna (entero) para el año de publicación
            // Columna de clave foránea para referenciar al autor
            $table->foreignId('author_id')->constrained()->onDelete('cascade');
            $table->timestamps(); // Crea columnas 'created_at' y 'updated_at'
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
