<?php
$connection = mysqli_connect("127.0.0.1", "root", "", "db_warehouse");

// Outcome
$totalElectronicOut = mysqli_query($connection, "SELECT COUNT(*) FROM products_out WHERE category = 'Electronic'");
$totalToolOut = mysqli_query($connection, "SELECT COUNT(*) FROM products_out WHERE category = 'Tool'");
$totalFurnitureOut = mysqli_query($connection, "SELECT COUNT(*) FROM products_out WHERE category = 'Furniture'");

$dataOutcome = [
    'totalElectronicOut' => mysqli_fetch_array($totalElectronicOut)[0],
    'totalToolOut' => mysqli_fetch_array($totalToolOut)[0],
    'totalFurnitureOut' => mysqli_fetch_array($totalFurnitureOut)[0],
];

header('Content-Type: application/json');
echo json_encode($dataOutcome);
?>
