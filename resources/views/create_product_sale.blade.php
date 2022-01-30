<!DOCTYPE html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Sales sheet</title>
    <link rel="stylesheet" href="/app.css">
</head>

<body>
@include("_heading")
<h1>Create Sale</h1>
<h1 class="text-center">Please add each product for the sale for {{$user->name}}</h1>

<div class="grid grid-cols-3">
    <div></div>
    <div>
        <form method="POST" action="{{ route('product_sale.store') }}">
            @csrf

            <input name="sale_id" type="hidden" value="{{ $saleId }}">

            <div class="p-4"></div>

            <select name="product_id" id="product id" class="font-semibold placeholder-black w-full shadow-sm text-black focus:ring-indigo-500 focus:border-indigo-500 block text-center p-4 sm:text-sm border-gray-900 px-4 rounded-full" placeholder="Select product">
                <option value="0">Product</option>
                @foreach($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>

            <div class="p-4"></div>

            <input type="number" min="1" max="99" name="quantity" id="quantity" class="font-semibold placeholder-black w-full shadow-sm text-black focus:ring-indigo-500 focus:border-indigo-500 block text-center p-4 sm:text-sm border-gray-900 px-4 rounded-full" placeholder="Quantity">
            <div class="p-4"></div>

            <button class="w-full py-4 px-4 bg-blue-500 text-white font-semibold rounded-full shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
                Submit
            </button>

            <div class="pt-4"></div>

            @foreach($productSales as $productSale)
                <span class="w-20">{{ $productSale->product->name }} - </span>
                <span>quantity: {{ $productSale->quantity }} </span>
                <a class="link" href="{{ route('product_sale.show', $productSale->id) }}">delete</a>
                <div class="pb-4 mb-4"></div>
            @endforeach

            @if($productSales->count())
                <a href="{{ route('sale.create') }}" class="block text-center w-full p-4 px-4 bg-blue-500 text-white font-semibold rounded-full shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
                    Done adding products to order
                </a>
            @endif
        </form>
    </div>
</div>
</body>

</html>
