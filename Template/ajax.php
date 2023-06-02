<?php

// require MySQL Connection
require ('../Database/DBController.php');

// require Product Class
require ('../Database/product.php');

// DBController object
$db = new DBController();



// Product object
$product = new Product($db);

if (isset($_POST['itemid'])){
    $result = $product->getProduct($_POST['itemid']);
}
?>