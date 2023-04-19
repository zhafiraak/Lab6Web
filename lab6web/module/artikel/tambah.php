<?php
include __DIR__ . '/../../config.php'; // include file config.php
include __DIR__ . '/../../class/database.php'; // include file database.php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // buat objek database
    $db = new Database();

    // tangkap data dari form
    $merk = $_POST['merk'];
    $warna = $_POST['warna'];
    $harga = $_POST['harga'];

    // simpan data ke database
    $data = [
        'merk' => $merk,
        'warna' => $warna,
        'harga' => $harga
    ];

    $result = $db->insert('mobil', $data);

    // cek apakah data berhasil disimpan
    if ($result) {
        echo '<div class="alert alert-success">Data berhasil disimpan.</div>';
    } else {
        echo '<div class="alert alert-danger">Data gagal disimpan.</div>';
    }
}

?>

<div class="container">
    <h2>Tambah Mobil Baru</h2>
    <form method="post" action="">
        <div class="form-group">
            <label for="merk">Merk:</label>
            <input type="text" class="form-control" id="merk" name="merk" required>
        </div>
        <div class="form-group">
            <label for="warna">Warna:</label>
            <input type="text" class="form-control" id="warna" name="warna" required>
        </div>
        <div class="form-group">
            <label for="harga">Harga:</label>
            <input type="number" class="form-control" id="harga" name="harga" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
