<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Jadwal Tidur</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Edit Jadwal Tidur</h2>
        <form action="edit_jadwal.php" method="post">
            <!-- Placeholder for PHP code to fetch and display data -->
            <input type="hidden" name="id" value="">

            <label for="tanggal">Tanggal:</label>
            <input type="date" name="tanggal" value="" required>

            <label for="waktu_tidur">Waktu Tidur:</label>
            <input type="time" name="waktu_tidur" value="" required>

            <label for="waktu_bangun">Waktu Bangun:</label>
            <input type="time" name="waktu_bangun" value="" required>

            <input type="submit" value="Update Jadwal">
        </form>
    </div>
</body>
</html>
