<!DOCTYPE html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Reorder</title>
    <link rel="stylesheet" href="/app.css">
</head>

<body>
<!-- This example requires Tailwind CSS v2.0+ -->
@include("_heading")

<div>
    <h1>Sales sheet</h1>
</div>
<div>
    <p>First Name</p>
    <p>Last Name</p>
    <p>Date</p>
    <p>Cell</p>
    <p>Product Ordered</p>
    <p>Quantity of tea bags</p>
    <p>Price</p> /auto generated when quantity is selected/
    /radial button for standard ingredients option for that tea or custom ingredients from dropdown list with sub list of quantity amounts
    /
    <p>Custom Ingredients</p>
    <p>1 tsp = .166667 ounces Make options to add ingredients by ounces</p>
    <p>Add Products /button generates another product ordered field/</p>
    <p><a href="/customers">Submit</a></p>
</div>
</body>
</html>
