<?php
// Importación de clases necesarias para crear la migración.
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Crea la tabla 'authors' en la base de datos
        Schema::create('authors', function (Blueprint $table) {
            $table->id(); // Crea una columna 'id' autoincremental y primaria
            $table->string('name'); // Crea una columna (string) llamada 'name'
            $table->string('nationality'); // Crea una columna (string) llamada 'nationality'
            $table->timestamps();// Crea dos columnas de marca de tiempo: 'created_at' y 'updated_at'

        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('authors');
    }
};
