<?php

include '../config/general_config.php';
$requestData = $_POST;
$action = $_POST['action'];

if ($action == "updateAddress") {
    $idAddress = $requestData['id'];
    echo "id address shipment :: ".$idAddress;
}
