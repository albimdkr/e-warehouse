<?php
$connection = mysqli_connect("127.0.0.1", "root", "", "db_warehouse");
$totalElectronics = mysqli_query($connection, "SELECT COUNT(*) FROM products WHERE category = 'Electronics'");
$totalTools = mysqli_query($connection, "SELECT COUNT(*) FROM products WHERE category = 'Tools'");
$totalFurniture = mysqli_query($connection, "SELECT COUNT(*) FROM products WHERE category = 'Furniture'");

$data = [
    'totalElectronics' => mysqli_fetch_array($totalElectronics)[0],
    'totalTools' => mysqli_fetch_array($totalTools)[0],
    'totalFurniture' => mysqli_fetch_array($totalFurniture)[0],
];

header('Content-Type: application/json');
echo json_encode($data);
?>
