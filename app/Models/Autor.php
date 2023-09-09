<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;
    protected $fillable=['nombre','nacionalidad','descripcion'];

    public function books() {
        return $this->belongsTo(Book::class,  'id_autors', 'id');
    }
   
}
