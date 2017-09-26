<?php

function getKategoriLabel($kategori) {
    if ($kategori == 'kediaman') {
        echo '<span class="badge badge-primary">Kediaman</span>';
    } else if ($kategori == 'kesihatan') {
        echo '<span class="badge badge-plain">Kesihatan</span>';
    } else if ($kategori == 'kecantikan') {
        echo '<span class="badge badge-information">Kecantikan</span>';
    } else if ($kategori == 'penjagaan') {
        echo '<span class="badge badge-success">Penjagaan Diri</span>';
    } else if ($kategori == 'lain') {
        echo '<span class="badge badge-warning">Lain-lain Produk</span>';
    }
}

function getState($id, $conn) {
    $query = "select * from apms_malaysia_state where apms_code = '$id' ";
    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_array($result);

    return $data['apms_state_name'];
}

function trim_tarikh_masa($tarikhmasa) {
    $tarikhmasaTemp = explode(" ", $tarikhmasa);
    $masa_temp = $tarikhmasaTemp[1];
    $tarikh_temp = explode("-", $tarikhmasaTemp[0]);
    
    $masa = explode(":", $masa_temp);
    $jam = $masa[0];
    $minit = $masa[1];
    $h12 = 12;
    if ($jam && $minit) {
        $ppm = "";
        $j = intval($jam);
        if ($j == 0) {
            $ppm = "AM";
        } else if ($j > 0 && $j < 12) {
            $ppm = "AM";
        } else if ($j == 12) {
            $ppm = "PM";
        } else if ($j > 12 && $j < ($h12 + 7)) {
            $ppm = "PM";
        } else if ($j >= ($h12 + 7) && $j < ($h12 + 11)) {
            $ppm = "PM";
        } else {
            $ppm = "";
        }
        if ($j > $h12) {
            $j = $j - $h12;
        }
        if ($j < 10) {
            $jj = "0" . $j;
        } else {
            $jj = $j;
        }
        $masa_fix = $jj . ":" . $minit . " " . $ppm;

        $tarikh_fix = $tarikh_temp[2] . "/" . $tarikh_temp[1] . "/" . $tarikh_temp[0] . " " . $masa_fix;

        return $tarikh_fix;
    }
}

function random_password($min_chars = 6, $max_chars = 8) {
    $use_chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*';
    $num_chars = rand($min_chars, $max_chars);
    $num_usable = strlen($use_chars) - 1;
    $string = '';
    for ($i = 0; $i < $num_chars; $i++) {
        $rand_char = rand(0, $num_usable);
        $string .= $use_chars{$rand_char};
    }
    return $string;
}