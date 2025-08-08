<?php
require "../public/functions.php";
// $query = "SELECT * FROM siswa";
// $result = mysqli_query($conn, $query);

// $rows = [];
// while($row = mysqli_fetch_assoc($result)){
//     $rows[] = $row;
// }

$siswa = query("SELECT * FROM siswa01");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Nilai</title>
</head>
<body>
    <h1>Daftar Nilai</h1>
    <a href="formtambah.php">Tambah Data</a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nis</th>
            <th>Nama</th>
            <th>Nilai Matematika</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
        <?php $no = 1 ?>
        <?php 
            foreach($siswa as $row) :
            $id = $row["id"];
        ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $row['nis']; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['nilai_mtk']; ?></td>
            <td>
                <?php
                if ($row['nilai_mtk'] >= 75) {
                    echo 'Lulus';
                } else {
                    echo 'Remidi';
                }
                ?>
            </td>
            <td>
                <a href="edit.php?id=<?= $id; ?>">Edit</a> | 
                <a href="hapus.php?id=<?= $id; ?>">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
