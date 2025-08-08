<?php
require "../public/functions.php";
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$nilai = $_POST['nilai_mtk'];

$query = "INSERT INTO siswa01 VALUES ('','$nis','$nama','$nilai') ";
$result = mysqli_query($conn, $query);

if ($result) {
    header ("location:../app/index.php?simpan=sukses");
} else {
    header ("location:../app/index.php?simpan=gagal");
}

?>