<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'nationality'];

    // Relación: Un autor tiene muchos libros
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}

