<!DOCTYPE html>
<html>
<head>
    <title>Product Income List</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 8px; }
        th { background-color: #f2f2f2; }
        span { font-weight: bold; }
    </style>
</head>
<body>
    <h2>E-Warehouse | Product Income List</h2>
    <p><span>Date: </span>{{ $date }}</p>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Category</th>
                <th>Description</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->title }}</td>
                <td>{{ $product->category }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <p><span>Printed by: </span>{{ $user->name }}</p>
    <p><span>Role: </span>{{ $user->role }}</p>
</body>
</html>
