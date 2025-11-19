<?php
$koneksi = mysqli_connect("localhost", "root", "", "projectlogin");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
