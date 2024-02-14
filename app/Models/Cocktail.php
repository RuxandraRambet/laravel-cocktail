<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cocktail extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class)->withTimestamps();
    }
}
