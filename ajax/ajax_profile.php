<?php

include '../config/general_config.php';
$requestData = $_POST;
$action = $_POST['action'];

if ($action == "updateAddress") {
    $id = $requestData['id'];
    $temp = explode("-", $id);
    $apsa_id = $temp[0];
    $apus_id = $temp[1];

    $query = "update apsa_shipment_address set apsa_use_this = 0 where apsa_apus_id = '" . $apus_id . "' ";
    $result = mysqli_query($conn, $query);
    if ($result) {
        $query2 = "update apsa_shipment_address set apsa_use_this = 1 where apsa_id = '" . $apsa_id . "' ";
        $result2 = mysqli_query($conn, $query2);
        if($result2) {
            echo "alamat berjaya diubah";
        } else {
            echo "alamat x berjaya diubah";
        }
    } else {
        echo "alamat x berjaya diubah";
    }
}
