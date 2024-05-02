<?php
$connection = mysqli_connect("127.0.0.1", "root", "", "db_warehouse");
$totalElectronic = mysqli_query($connection, "SELECT COUNT(*) FROM products_in WHERE category = 'Electronic'");
$totalTool = mysqli_query($connection, "SELECT COUNT(*) FROM products_in WHERE category = 'Tool'");
$totalFurniture = mysqli_query($connection, "SELECT COUNT(*) FROM products_in WHERE category = 'Furniture'");

$data = [
    'totalElectronic' => mysqli_fetch_array($totalElectronic)[0],
    'totalTool' => mysqli_fetch_array($totalTool)[0],
    'totalFurniture' => mysqli_fetch_array($totalFurniture)[0],
];

header('Content-Type: application/json');
echo json_encode($data);
?>
