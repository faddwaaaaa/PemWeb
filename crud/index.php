<?php
require "../public/functions.php";
$query = "SELECT * FROM siswa01";
$result = mysqli_query($conn, $query);

$rows = [];
while($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
};

$no = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Data</title>
</head>
<body>
    <h1>Tampilan Data</h1>
    <a href="tambah.php">Tambah Data</a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nis</th>
            <th>Nama</th>
            <th>Nilai</th>
            <th>Proses</th>
        </tr>
        <?php foreach($rows as $row):
            $id = $row["id"];
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['nis']; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['nilai_mtk'] ?></td>
            <td>
                <a href="formEdit.php?id=<?= $id; ?>">Edit</a> | 
                <a href="hapus.php?id=<?= $id; ?>">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
