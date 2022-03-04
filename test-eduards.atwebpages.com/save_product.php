<?php
require 'autoload.php';

$database = new database();
$data = $database->prepareData($_POST);

if($_POST['productType'] == "DVD"){
    $product = new DVD();
}elseif($_POST['productType'] == "Book"){
    $product = new Book();
}elseif($_POST['productType'] == "Furniture"){
    $product = new Furniture();
}
$product->setData($data);
$database->addProduct($product, $data);
?>