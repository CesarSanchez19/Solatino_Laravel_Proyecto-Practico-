<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'year', 'author_id'];

    // Relación: Un libro pertenece a un autor
    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    // Relación: Un libro puede tener muchos géneros
    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }
}
