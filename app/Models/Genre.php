<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    // Relación: Un género puede pertenecer a muchos libros
    public function books()
    {
        return $this->belongsToMany(Book::class);
    }
}
