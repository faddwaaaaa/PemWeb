<?php
require "../public/functions.php";
$nis = $_POST['nisInput'];
$nama = $_POST['namaInput'];
$nilai = $_POST['nilaiInput'];

$query = "INSERT INTO siswa01 values('','$nis','$nama','$nilai')";
$result = mysqli_query($conn, $query);

if ($result) {
    header ("location:index.php?simpan=sukses");
} else {
    header ("location:index.php?simpan=gagal");
}
?>