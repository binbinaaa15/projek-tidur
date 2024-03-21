<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Jadwal Tidur</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Form Jadwal Tidur</h2>
        <form action="tambah_jadwal.php" method="post">
            <label for="tanggal">Tanggal:</label>
            <input type="date" name="tanggal" required>

            <label for="waktu_tidur">Waktu Tidur:</label>
            <input type="time" name="waktu_tidur" required>

            <label for="waktu_bangun">Waktu Bangun:</label>
            <input type="time" name="waktu_bangun" required>

            <input type="submit" value="Tambah Jadwal">
            
        </form>

        <div class="mt-4">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Waktu Tidur</th>
                        <th>Waktu Bangun</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        // Koneksi ke database (gantilah dengan informasi koneksi yang sesuai)
                        include "koneksi.php";

                        // Query untuk mengambil data dari tabel jadwal_tidur
                        $query = "SELECT * FROM tb_tidur";
                        $result = mysqli_query($koneksi, $query);

                        // Loop untuk menampilkan data
                        $no = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $no . "</td>";
                            echo "<td>" . $row['tanggal'] . "</td>";
                            echo "<td>" . $row['waktu_tidur'] . "</td>";
                            echo "<td>" . $row['waktu_bangun'] . "</td>";
                            echo "</tr>";
                            $no++;
                        }

                        // Tutup koneksi
                        mysqli_close($koneksi);
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
