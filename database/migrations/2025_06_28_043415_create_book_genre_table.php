<?php
// Importa las clases necesarias para definir la migración
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Crea la tabla 'book_genre' en la base de datos
        Schema::create('book_genre', function (Blueprint $table) {
            // Crea una clave foránea 'book_id' que referencia a la tabla 'books' (columna 'id')
            $table->foreignId('book_id')->constrained();
            // Crea una clave foránea 'genre_id' que referencia a la tabla 'genres' (columna 'id')
            $table->foreignId('genre_id')->constrained();
            // Define la clave primaria compuesta entre 'book_id' y 'genre_id'
            $table->primary(['book_id', 'genre_id']);
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_genre');
    }
};
