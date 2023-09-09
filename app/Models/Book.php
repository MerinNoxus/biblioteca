<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable=[
        'titulo',
        'descripcion',
        'imagen',
        'pdf',
        'id_categories',
        'id_autors'
    ];



    public function autors() {
        return $this->hasOne(Autor::class,'id_books', 'id_autors');
    }
    
    public function category() {
        return $this->hasOne(Category::class, 'id', 'id_categories');
    }

   }

