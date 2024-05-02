<!DOCTYPE html>
<html>
<head>
    <title>Total Products Outcome</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 8px; }
        th { background-color: #f2f2f2; }
        span { font-weight: bold; }
        .electronics {color: #4e73df; }
        .tools {color: #1cc88a; }
        .furniture {color: #36b9cc; }
    </style>
</head>
<body>
    <h2>E-Warehouse | Total Products Outcome</h2>
    <p><span>Date: </span>{{ $date }}</p>
    <table>
        <thead>
            <tr>
                <th class="electronics">Total Electronics</th>
                <th class="tools">Total Tools</th>
                <th class="furniture">Total Furniture</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="text-align: center;">{{ $totalElectronics }}</td>
                <td style="text-align: center;">{{ $totalTools }}</td>
                <td style="text-align: center;">{{ $totalFurniture }}</td>
            </tr>
        </tbody>
    </table>
    <p><span>Printed by: </span>{{ $user->name }}</p>
    <p><span>Role: </span>{{ $user->role }}</p>
</body>
</html>
