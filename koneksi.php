<?php
$koneksi = new mysqli('localhost', 'root', '', 'uhddg');
if ($koneksi) {
    // echo "Koneksi Berhasil";
}else{
    echo $koneksi->error;
}

?>