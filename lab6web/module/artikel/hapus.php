<?php
require_once __DIR__.'/../../config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db_name = 'mobil';
    
    $koneksi = mysqli_connect($host, $user, $password, $db_name);
    

    $query = "DELETE FROM mobil WHERE id=$id";
    mysqli_query($koneksi, $query);

    mysqli_close($koneksi);

    header('Location: index.php');
}
?>
