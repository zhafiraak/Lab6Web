<?php
include 'tamplate/header.php';
// include 'tamplate/sidebar.php';
?>

<div class="container">
    <h2>Selamat Datang</h2>
    <table class="table">



    </table>
</div>
<div class="container">
    <div class="main">
        <table>

            <?php
            $mod = $_REQUEST['mod'];
            switch ($mod) {

                case "home":
                    require("module/home.php");
                    break;
                case "tambah":
                    require("module/artikel/tambah.php");
                    break;
                case "edit":
                    require("module/artikel/edit.php");
                    break;
                case "simpan":
                    require("module/artikel/simpan.php");
                    break;
                default:
                    require("module/home.php");
            }
            ?>
        </table>
        <?php
        include 'tamplate/footer.php';
        ?>