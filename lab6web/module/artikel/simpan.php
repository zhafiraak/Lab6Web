<?php
require_once __DIR__.'/../../config.php';
require_once __DIR__.'/../../class/database.php';

if (isset($_POST['merk']) && isset($_POST['warna']) && isset($_POST['harga'])) {
    $merk = $_POST['merk'];
    $warna = $_POST['warna'];
    $harga = $_POST['harga'];

    $db = new Database();
    $db->insert('artikel', ['judul' => $judul, 'konten' => $konten]);

    header('Location: ../index.php');
}
?>