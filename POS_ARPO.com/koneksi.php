<?php
$connection = mysqli_connect('localhost', 'root', '', 'lolos_posi');
if(!$connection) {
    die("Koneksi gagal!".mysqli_connect_error());
}
?>