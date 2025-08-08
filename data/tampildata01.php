<?php
$arrassoc = [
    ["nama" => "Fadwa",
    "jurusan" => "Teknik Informatika"
    ],
    ["nama" => "Aidha",
    "jurusan" => "Teknik Nuklir"
    ],
    ["nama" => "Rifa",
    "jurusan" => "Teknik Arsitektur"
    ]
];
$conn = mysqli_connect('localhost','root','','xiirpl1');
$query = "SELECT nis,nama FROM siswa";
$result = mysqli_query($conn, $query);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
   <h1>Daftar Mahasiswa</h1> 
   <a href="tambah.php">Tambah Data</a><br>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jurusan</th>
        </tr>
        <?php $y = 1; ?>
        <?php for($x = 0; $x < count($arrassoc); $x++){?>
        <tr>
            <td><?= $y++; ?></td>
            <td><?= $arrassoc[$x]['nama']; ?></td>
            <td><?= $arrassoc[$x]['jurusan']; ?></td>
        </tr>
        <?php } ?>
   </table>

<br><hr><br>

   <table border="1">
        <tr>
            <th>Status</th>
            <th>No</th>
            <th>Nis</th>
            <th>Nama</th>
        </tr>
        <?php $y = 1; ?>
        <?php while($row = mysqli_fetch_assoc($result)) :?>
        <tr>
            <td>
                <a href="edit.php">Edit |</a>
                <a href="hapus.php">Hapus</a>
            </td>
            <td><?= $y++; ?></td>
            <td><?= $row['nis']; ?></td>
            <td><?= $row['nama']; ?></td>
        </tr>
        <?php endwhile ?>
   </table>

<br><hr><br>
            
</body>
</html>