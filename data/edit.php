<?php
require "../public/functions.php";
$id = $_GET['id'];

$query = "SELECT * FROM siswa WHERE id = $id";
$result = mysqli_query($conn,$query);

$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <h1>Edit Data</h1>
    <form action="ubahData.php" method="post">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        
        <label for="">Nis</label><br>
        <input type="number" name="nis" value="<?= $row['nis'] ?>"><br>

        <label for="">Nama</label><br>
        <input type="text" name="nama" value="<?= $row['nama'] ?>"><br>

        <label for="">Nilai Matematika</label><br>
        <input type="number" name="nilai_mtk" value="<?= $row['nilai_mtk'] ?>"><br>

        <br>
        <input type="submit" value="Ubah"><br><br>
    </form>
</body>
</html>

<?php } ?>