<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'jadwal_tidur';

$koneksi = mysqli_connect($host, $username, $password, $database);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Mengambil data dari database
$query = "SELECT * FROM jadwal_tidur";
$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query gagal: " . mysqli_error($koneksi));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Jadwal Tidur</title>
</head>
<body>
    <h1>Daftar Jadwal Tidur</h1>

    <?php
    // Menampilkan data dalam bentuk tabel
    if (mysqli_num_rows($result) > 0) {
        echo '<table border="1">
                <tr>
                    <th>ID</th>
                    <th>Tanggal</th>
                    <th>Waktu Tidur</th>
                    <th>Waktu Bangun</th>
                </tr>';

        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>
                    <td>' . $row['id'] . '</td>
                    <td>' . $row['tanggal'] . '</td>
                    <td>' . $row['waktu_tidur'] . '</td>
                    <td>' . $row['waktu_bangun'] . '</td>
                </tr>';
        }

        echo '</table>';
    } else {
        echo '<p>Tidak ada data jadwal tidur.</p>';
    }

    // Membebaskan hasil query
    mysqli_free_result($result);

    // Menutup koneksi
    mysqli_close($koneksi);
    ?>
</body>
</html>
