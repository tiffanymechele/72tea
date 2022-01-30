<?php

namespace App\Observers;

use App\Models\Ingredient;
use App\Models\ProductSale;

class ProductSaleObserver
{
    /**
     * Handle the ProductSale "created" event.
     *
     * @param  \App\Models\ProductSale  $productSale
     * @return void
     */
    public function created(ProductSale $productSale)
    {
        $quantity = $productSale->quantity;

        $ingredientProducts = $productSale->product->ingredientProducts;

        foreach($ingredientProducts as $ingredientProduct){
            $ouncesPerProduct = $ingredientProduct->ounces;
            $totalOuncesSold = $quantity * $ouncesPerProduct;
            $ingredient = Ingredient::find($ingredientProduct->ingredient_id);

            $ingredient->update([
               'ounces' => $ingredient->ounces - $totalOuncesSold
            ]);
        }
    }

    /**
     * Handle the ProductSale "updated" event.
     *
     * @param  \App\Models\ProductSale  $productSale
     * @return void
     */
    public function updated(ProductSale $productSale)
    {
        //
    }

    /**
     * Handle the ProductSale "deleted" event.
     *
     * @param  \App\Models\ProductSale  $productSale
     * @return void
     */
    public function deleted(ProductSale $productSale)
    {
        //
    }

    /**
     * Handle the ProductSale "restored" event.
     *
     * @param  \App\Models\ProductSale  $productSale
     * @return void
     */
    public function restored(ProductSale $productSale)
    {
        //
    }

    /**
     * Handle the ProductSale "force deleted" event.
     *
     * @param  \App\Models\ProductSale  $productSale
     * @return void
     */
    public function forceDeleted(ProductSale $productSale)
    {
        //
    }
}
