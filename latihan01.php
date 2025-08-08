<?php
$siswa = array(
    array("id" => 1, "nis" => "18482", "nama" => "fadwa"),
    array("id" => 2, "nis" => "18497", "nama" => "rifa")
);

//foreach ($siswa as $data) {
//    echo "ID: " . $data["id"] . "<br>";
//    echo "Nis: " . $data["nis"] . "<br>";
//    echo "Nama: " . $data["nama"] . "<br>";

//    echo "<br>";
//}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>
<body>

<h2>Daftar Siswa</h2>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>NIS</th>
        <th>Nama</th>
    </tr>

    <?php foreach ($siswa as $data): ?>
        <tr>
            <td><?= $data["id"]; ?></td>
            <td><?= $data["nis"]; ?></td>
            <td><?= $data["nama"]; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>