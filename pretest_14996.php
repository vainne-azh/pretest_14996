<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM | Nama & NIM</title>
</head>

<body>
    <!-- FORM INPUT NIM DAN NAMA -->
    <form method="POST" action="">

        <label for="nim">NIM : </label>
        <input type="text" id="nim" name="nim" required> <br> <br>

        <label for="nama">Nama: </label>
        <input type="text" id="nama" name="nama" required> <br> <br>

        <button type="submit">Submit</button>

    </form>

    <!-- MEMBACA INPUT DAN MENAMPILKAN OUTPUT -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nim = htmlspecialchars($_POST['nim']);
        $nama = htmlspecialchars($_POST['nama']);
        echo "<h3> Halo $nama, NIM kamu pasti $nim </h3>";
    }
    ?>

</body>

</html>