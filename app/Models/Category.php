<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $primaryKey = 'category_id';

    public function movies(){
        return $this->belongsToMany(Movie::class, 'movie_category')->withTimestamps();
    }
}
