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
