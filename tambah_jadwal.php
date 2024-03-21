<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tanggal = $_POST["tanggal"];
    $waktu_tidur = $_POST["waktu_tidur"];
    $waktu_bangun = $_POST["waktu_bangun"];

    $query = "INSERT INTO tb_tidur (tanggal, waktu_tidur, waktu_bangun) VALUES ('$tanggal', '$waktu_tidur', '$waktu_bangun')";

    if (mysqli_query($koneksi, $query)) {
        echo "Jadwal berhasil ditambahkan.";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}

mysqli_close($koneksi);
?>
