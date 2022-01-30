<!DOCTYPE html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Ingredients for {{ $product->name }}</title>
    <link rel="stylesheet" href="/app.css">
</head>

<body>
@include("_heading")
<h1>New Ingredients for {{ $product->name }}</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="grid grid-cols-3">
    <div></div>
    <div>
        <form method="POST" action="{{ route('ingredient_product.store') }}">
            @csrf

            <input type="hidden" name="product_id" value="{{ $product->id }}">

            <div class="p-4"></div>

            @if($ingredients->count())
            <select type="text" name="ingredient_id" id="ingredient_id" class="font-semibold placeholder-black w-full shadow-sm text-black focus:ring-indigo-500 focus:border-indigo-500 block text-center p-4 sm:text-sm border-gray-900 px-4 rounded-full" placeholder="teaspoons">
                <option disabled value="0">Select ingredient</option>
                @foreach($ingredients as $ingredient)
                    <option value="{{ $ingredient->id }}">{{ $ingredient->name }}</option>
                @endforeach
            </select>

            <div class="p-4"></div>

            <select type="text" name="ounces" id="ounces" class="font-semibold placeholder-black w-full shadow-sm text-black focus:ring-indigo-500 focus:border-indigo-500 block text-center p-4 sm:text-sm border-gray-900 px-4 rounded-full" placeholder="teaspoons">
                <option value="0">Select quantity of ingredient</option>
                <option value="0.02083">1/8 tsp</option>
                <option value="0.04167">1/4 tsp</option>
                <option value="0.05556">1/3 tsp</option>
                <option value="0.08333">1/2 tsp</option>
                <option value="0.11111">2/3 tsp</option>
                <option value="0.16667">1 tsp</option>
                <option value="0.33333">2 tsp</option>
                <option value="0.25">1/2 TB</option>
                <option value="0.5">1 TB/ 3 tsp</option>
                <option value="2.02884">1/4 cup</option>
                <option value='1'>1 ounce</option>
                <option value="2">2 ounces</option>
                <option value="3">3 ounces</option>
                <option value="4">4 ounces</option>
                <option value="5">5 ounces</option>
                <option value="6">6 ounces</option>
                <option value="7">7 ounces</option>
            </select>

            <div class="p-4"></div>
            <button class="w-full py-4 px-4 bg-blue-500 text-white font-semibold rounded-full shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
                Add another ingredient
            </button>

            @else
                All available ingredients have been used.  You can add more ingredient types on the
                <a class="link" href="{{ route('ingredient.create') }}">ingredients</a> page.
            @endif

            <div class="pt-4"></div>

            @foreach($ingredientProducts as $ingredientProduct)
                <span class="w-20">{{ $ingredientProduct->ingredient->name }} - </span>
                <span>{{ $ingredientProduct->ounces }} ounces - </span>
                <a class="link" href="{{ route('ingredient_product.show', $ingredientProduct->id) }}">delete</a>
                <div class="pb-4 mb-4"></div>
            @endforeach

            @if($ingredientProducts->count())
            <a href="{{ route('product.create') }}" class="block text-center w-full p-4 px-4 bg-blue-500 text-white font-semibold rounded-full shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
                Done adding ingredients
            </a>
                @endif
        </form>
    </div>
</div>
</body>

</html>
