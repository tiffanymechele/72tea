<!DOCTYPE html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Inventory</title>
    <link rel="stylesheet" href="/app.css">
</head>
<!-- This example requires Tailwind CSS v2.0+ -->
@include("_heading")
<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Ingredient

                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Amount in Stock
                        </th>
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Update total
                        </th>
                        <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Adjust Amount Manually</span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($ingredients as $ingredient)
                        <form action="{{ route('ingredient.update', $ingredient->id) }}" method="POST">
                            @method('PUT')
                            @csrf
                            <tr class="bg-white">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">

                                    {{ $ingredient->name }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $ingredient->ounces }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <div>
                                        <input type="number" step=".00001" name="ounces" id="ounces" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block max-w-xs sm:text-sm border-gray-300 rounded-md" placeholder="New Total">
                                    </div>
                                </td>
                                    <!-- This example requires Tailwind CSS v2.0+ -->
                               <td>
                                   <div>
                                  <button class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Complete Total
                                  </button>
                                </div>
                            </td>
                            </tr>
                        </form>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</html>
