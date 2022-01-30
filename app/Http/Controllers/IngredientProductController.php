<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIngredientProductRequest;
use App\Models\Ingredient;
use App\Models\IngredientProduct;
use App\Models\Product;
use Illuminate\Http\Request;

class IngredientProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreIngredientProductRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIngredientProductRequest $request)
    {
        IngredientProduct::create([
           'product_id' => request('product_id'),
           'ingredient_id' => request('ingredient_id'),
           'ounces' => request('ounces'),
        ]);

        return redirect(route('product.edit', request('product_id')));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\IngredientProduct  $ingredientProduct
     * @return \Illuminate\Http\Response
     */
    public function show(IngredientProduct $ingredientProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\IngredientProduct  $ingredientProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(IngredientProduct $ingredientProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\IngredientProduct  $ingredientProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, IngredientProduct $ingredientProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IngredientProduct  $ingredientProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(IngredientProduct $ingredientProduct)
    {
        //
    }
}
