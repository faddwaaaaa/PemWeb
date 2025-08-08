<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah Data</h1>
    <form action="prosesTambah.php" method="POST">
        <label for="">Nis</label><br>
        <input type="number" name="nis"><br>

        <label for="">Nama</label><br>
        <input type="text" name="nama"><br>

        <label for="">Nilai Matematika</label><br>
        <input type="number" name="nilai_mtk"><br>

        <br>
        <input type="submit" value="Tambah"><br><br>
    </form>
</body>
</html>