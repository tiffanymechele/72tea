<!DOCTYPE html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Product</title>
    <link rel="stylesheet" href="/app.css">
</head>
<body>
<!-- This example requires Tailwind CSS v2.0+ -->
@include("_heading")
<h1>New Recipe Name</h1>

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
                <form method="POST" action="{{ route('product.store') }}">
                    @csrf

                    <input type="text" name="name" id="name" class="font-semibold placeholder-black w-full shadow-sm text-black focus:ring-indigo-500 focus:border-indigo-500 block text-center p-4 sm:text-sm border-gray-900 px-4 rounded-full" placeholder="Add product to database">

                    <div class="p-4"></div>
                    <!--
                                       <select type="text" name="ounces" id="ounces" class="font-semibold placeholder-black w-full shadow-sm text-black focus:ring-indigo-500 focus:border-indigo-500 block text-center p-4 sm:text-sm border-gray-900 px-4 rounded-full" placeholder="teaspoons">
                                       <option value="0">total inventory</option>
                                       <option value="0.0208333">1/8 tsp</option>
                                       <option value="0.0416667">1/4 tsp</option>
                                       <option value="0.0555555">1/3 tsp</option>
                                       <option value="0.0833333">1/2 tsp</option>
                                       <option value="0.111111">2/3 tsp</option>
                                       <option value="0.166667">1 tsp</option>
                                       <option value="0.333333">2 tsp</option>
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
                      -->
                                   <div class="p-4"></div>
                                       <button class="w-full py-4 px-4 bg-blue-500 text-white font-semibold rounded-full shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
                                       Submit
                                       </button>
                                   </form>
                               </div>
                           </div>
                   </body>

                   </html>
