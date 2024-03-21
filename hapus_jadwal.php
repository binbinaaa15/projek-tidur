<?php
include "koneksi.php";

$id = $_GET["id"];
$query = "DELETE FROM jadwal WHERE id=$id";

if (mysqli_query($koneksi, $query)) {
    echo "Jadwal berhasil dihapus.";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
