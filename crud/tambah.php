<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah Data</h1>
    <form action="inputan.php" method="post">
        <label for="nis">Nis</label>
        <input type="number" id="nis" name="nisInput">

        <label for="nama">Nama</label>
        <input type="text" id="nama" name="namaInput">

        <label for="nilai">Nilai Matematika</label>
        <input type="number" id="nilai" name="nilaiInput">

        <input type="submit" value="Simpan">
    </form>
</body>
</html>