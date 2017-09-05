<?php

$productId = $_POST['product'];

switch($productId) {

    case 'K001' : include '../modal/product_001.php'; break;
    
    case 'pakej_001' : include '../modal/pakej_001.php'; break;
    
    default : echo "product not found"; break;
}