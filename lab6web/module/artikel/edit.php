<?php
require_once __DIR__.'/../../class/database.php';

$database = new Database();


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM mobil WHERE id=$id";
    $result = $database->query($query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $merk = $row['merk'];
        $warna = $row['warna'];
        $harga = $row['harga'];
    }
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $merk = $_POST['merk'];
    $warna = $_POST['warna'];
    $harga = $_POST['harga'];

    $query = "UPDATE mobil SET merk='$merk', warna='$warna', harga=$harga WHERE id=$id";
    $database->query($query);

    header('Location: index.php');
}

?>

<div class="container">
    <h2>Edit Detail Mobil</h2>
    <form method="post" action="edit.php">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="form-group">
            <label for="merk">Merk:</label>
            <input type="text" class="form-control" id="merk" name="merk" value="<?php echo $merk; ?>" required>
        </div>
        <div class="form-group">
            <label for="warna">Warna:</label>
            <input type="text" class="form-control" id="warna" name="warna" value="<?php echo $warna; ?>" required>
        </div>
        <div class="form-group">
            <label for="harga">Harga:</label>
            <input type="number" class="form-control" id="harga" name="harga" value="<?php echo $harga; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary" name="update">Update</button>
    </form>
</div>

