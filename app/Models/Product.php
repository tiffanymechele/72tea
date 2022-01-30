<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable=[
        "name"
    ];

    public function ingredientProducts(){
        return $this->hasMany(IngredientProduct::class);
    }

    public function ingredients() {
        return $this->belongsToMany(Ingredient::class)->withPivot('ounces');
    }
}
