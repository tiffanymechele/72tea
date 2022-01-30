<!DOCTYPE html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Products</title>
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
                            Product

                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Ingredients
                        </th>
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Update Ingredients
                        </th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($products as $product)
                            <tr class="bg-white">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        {{$product->name }}
                                </td>
                                <td class="px-6 py-4 whitespace text-sm font-medium text-gray-900 w-80">
                                    @foreach($product->ingredients as $ingredient)
                                    {{ $ingredient->name }}: {{ $ingredient->pivot->ounces }} ounces,
                                    @endforeach
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="{{route("product.edit",$product->id)}}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                </td>
                                <!-- This example requires Tailwind CSS v2.0+ -->
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
