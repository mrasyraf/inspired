<?php

$productId = $_POST['product'];

switch($productId) {
    
    //kediaman
    case 'K001' : include '../modal/product_001.php'; break;
    
    case 'K002' : include '../modal/product_002.php'; break;
    
    case 'K003' : include '../modal/product_003.php'; break;
    
    //kesihatan
    case 'S001' : include '../modal/product_004.php'; break;
    
    case 'S002' : include '../modal/product_005.php'; break;
    
    case 'S003' : include '../modal/product_006.php'; break;
    
    case 'S004' : include '../modal/product_007.php'; break;
    
    case 'S005' : include '../modal/product_008.php'; break;
    
    

    //pakej
    
    case 'pakej_001' : include '../modal/pakej_001.php'; break;
    
    default : echo "product not found"; break;
}