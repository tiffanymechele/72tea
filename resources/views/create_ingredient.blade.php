<!DOCTYPE html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Ingredient</title>
    <link rel="stylesheet" href="/app.css">
</head>
<body>
@include("_heading")
<h1>Insert new ingredient into the database</h1>

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
                <form method="POST" action="{{ route('ingredient.store') }}">
                    @csrf

                    <input type="text" name="name" id="name" class="font-semibold placeholder-black w-full shadow-sm text-black focus:ring-indigo-500 focus:border-indigo-500 block text-center p-4 sm:text-sm border-gray-900 px-4 rounded-full" placeholder="Add ingredient to database">

                    <div class="p-4"></div>

                    <select type="text" name="ounces" id="ounces" class="font-semibold placeholder-black w-full shadow-sm text-black focus:ring-indigo-500 focus:border-indigo-500 block text-center p-4 sm:text-sm border-gray-900 px-4 rounded-full" placeholder="teaspoons">
                    <option value="0">total inventory</option>
                    <option value="0">0 cup</option>
                    <option value="2.02884">1/4 cup</option>
                    <option value="2.70512">1/3 cup</option>
                    <option value="4.05768">1/2 cup</option>
                    <option value="8.11537">1 cup</option>
                    <option value="16.2307">2 cups</option>
                    <option value="24.3461">3 cups</option>
                    <option value="32.4615">4 cups</option>
                    <option value="40.5768">5 cups</option>
                    <option value="48.6922">6 cups</option>
                    <option value="56.8076">7 cups</option>
                    <option value='1'>1 ounce</option>
                    <option value="2">2 ounces</option>
                    <option value="3">3 ounces</option>
                    <option value="4">4 ounces</option>


                </select>
                <div class="p-4"></div>
                    <button class="w-full py-4 px-4 bg-blue-500 text-white font-semibold rounded-full shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
                    Submit
                    </button>
                </form>
            </div>
        </div>
</body>

</html>
