<?php
$server = "localhost";
$username = "root";
$password = "";
$db_name = "archivehub_dpid";

$koneksi = mysqli_connect($server, $username, $password, $db_name);

if(!$koneksi) {
    echo "Koneksi Gagal";
} else {
    // echo "Koneksi Berhasil";
}

?>