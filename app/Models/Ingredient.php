<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $fillable=[
      "ounces",
      "name"
    ];

    public function ingredientProducts(){
        return $this->hasMany(IngredientProduct::class);
    }
}
