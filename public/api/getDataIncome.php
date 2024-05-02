<?php
$connection = mysqli_connect("127.0.0.1", "root", "", "db_warehouse");

// Income
$totalElectronicIn = mysqli_query($connection, "SELECT COUNT(*) FROM products_in WHERE category = 'Electronic'");
$totalToolIn = mysqli_query($connection, "SELECT COUNT(*) FROM products_in WHERE category = 'Tool'");
$totalFurnitureIn = mysqli_query($connection, "SELECT COUNT(*) FROM products_in WHERE category = 'Furniture'");

$dataIncome = [
    'totalElectronicIn' => mysqli_fetch_array($totalElectronicIn)[0],
    'totalToolIn' => mysqli_fetch_array($totalToolIn)[0],
    'totalFurnitureIn' => mysqli_fetch_array($totalFurnitureIn)[0],
];

header('Content-Type: application/json');
echo json_encode($dataIncome);
?>
