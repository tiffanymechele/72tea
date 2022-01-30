<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IngredientProduct extends Model
{
    protected $table = 'ingredient_product';

    protected $fillable = [
        'ingredient_id',
        'product_id',
        'ounces',
    ];

    public function ingredient(){
        return $this->belongsTo(Ingredient::class);
    }
}
