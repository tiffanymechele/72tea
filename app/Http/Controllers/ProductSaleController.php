<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductSaleRequest;
use App\Http\Requests\UpdateProductSaleRequest;
use App\Models\Product;
use App\Models\ProductSale;
use App\Models\Sale;
use App\Models\User;
use Illuminate\Http\Response;

class ProductSaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $productSales = ProductSale::where('sale_id', request('sale_id'))->get();

       return view("create_product_sale", [
           "products" => Product::all(),
           "productSales" => $productSales,
           "saleId" => request('sale_id'),
           "user" => Sale::find(request('sale_id'))->user,
       ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreProductSaleRequest $request
     * @return Response
     */
    public function store()
    {
        ProductSale::create([
            "quantity" => request("quantity"),
            "product_id" => request("product_id"),
            "sale_id" => request('sale_id'),
        ]);

        return redirect(route("product_sale.create", [
            'sale_id' => request('sale_id'),
        ]));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductSale  $productSale
     * @return Response
     */
    public function show(ProductSale $productSale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductSale  $productSale
     * @return Response
     */
    public function edit(ProductSale $productSale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductSaleRequest  $request
     * @param  \App\Models\ProductSale  $productSale
     * @return Response
     */
    public function update(UpdateProductSaleRequest $request, ProductSale $productSale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductSale  $productSale
     * @return Response
     */
    public function destroy(ProductSale $productSale)
    {
        //
    }
}
