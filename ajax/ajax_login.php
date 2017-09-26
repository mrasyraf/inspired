<?php

include '../config/general_config.php';
$requestData = $_POST;
$action = $_POST['action'];


if ($action == 'login') {

    //encrpyt password
    $username = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    

    $query = "SELECT * FROM apus_user where apus_email = '" . $username . "'";
    $result = mysqli_query($conn, $query);
    $numRow = mysqli_num_rows($result);
    $data = mysqli_fetch_assoc($result);
//    $newPass = "12345";
//    echo "aa $encryptPassword = password_hash($newPass, PASSWORD_BCRYPT);
    if ($numRow > 0) {
        //decrypt password
        if (password_verify($password, $data['apus_password'])) {
            $update = "UPDATE apus_user SET apus_last_visit = now() where apus_email = '" . $username . "'";
            $res = mysqli_query($conn, $update);
            //set session
            $_SESSION['isLoggedIn'] = true;
            $_SESSION['username'] = $requestData['email'];
            $_SESSION['name'] = $data['apus_name'];
            echo 1;
        } else {
            echo 0;
        }
    } else {
        echo 999;
    }
} else if ($action == 'resetPassword') {
    
    $username = filter_input(INPUT_POST, 'apus_email', FILTER_SANITIZE_STRING);
    $query = "SELECT * FROM apus_user where apus_email = '" . $username . "'";
    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($result);
    
    if($data) {
        $newPass = random_password();
        $encryptPassword = password_hash($newPass, PASSWORD_BCRYPT);
        $update = "UPDATE apus_user SET apus_password = '".$encryptPassword."'  where apus_email = '" . $username . "'";
        $res = mysqli_query($conn, $update);
        $affectedRow = mysqli_affected_rows($conn);
        if ($affectedRow > 0) {
            $subject = "healthylife4u - Katalaluan diset semula";
            $headers = "From: noreply@healthylife4u.epizy.com\n";
            $body = "Tuan/Puan " . $data['apus_name'] . ",<br><br>";
            $body .= "Katalaluan anda telah diset semula.<br><br>";
            $body .= "<table>";
            $body .= "<tr><th align='left'>Sistem URL </th><td>:</td><td>http://healthylife4u.epizy.com/login.php</td></tr>";
            $body .= "<tr><th align='left'>Pengguna ID </th><td>:</td><td>" . $data['apus_email'] . "</td></tr>";
            $body .= "<tr><th align='left'>Katalaluan Sementara</th><td>:</td><td> " . $newPass . "</td></tr>";
            $body .= "</tr></table><br>";
            $body .= "Sila Daftar Masuk dan mengemaskini kata laluan anda dengan kadar segera.<br>";
            mail($username,$subject,$body,$headers);
            mysqli_close($conn);
            echo 1;  
        } else {
            echo 0;
        }
        
    } else {
        echo 999;
    }
} else if ($action == 'register') {
    $name = filter_input(INPUT_POST, 'apus_name', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'apus_password', FILTER_SANITIZE_STRING);
    $encryptPassword = password_hash($password, PASSWORD_BCRYPT);
    $emel = filter_input(INPUT_POST, 'apus_email', FILTER_SANITIZE_STRING);
    $phone_no = filter_input(INPUT_POST, 'apus_phone_no', FILTER_SANITIZE_STRING);
    $address = $requestData['apus_address'];
    $postcode = filter_input(INPUT_POST, 'apus_postcode', FILTER_SANITIZE_STRING);
    $state = filter_input(INPUT_POST, 'apus_state', FILTER_SANITIZE_STRING);

    $query = "INSERT INTO apus_user (
        apus_name,
        apus_email,
        apus_phone_no,
        apus_address,
        apus_postcode,
        apus_state,
        apus_password,
        apus_is_default_password,
        apus_last_visit,
        apus_last_modified
    )
    VALUES
    (
        UPPER('$name'),
        '$emel',
        '$phone_no',
        UPPER('$address'),
        '$postcode',
        '$state',
        '$encryptPassword',
        '0',
        now(),
        now()
    )";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo 1;
    } else {
        echo 0;
    }
}