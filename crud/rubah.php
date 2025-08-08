<?php
require "../public/functions.php";
$id = $_POST['id'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$nilai = $_POST['nilai_mtk'];

$query = "UPDATE siswa01 SET 
        nis = '$nis' , 
        nama = '$nama' , 
        nilai_mtk = '$nilai' 
        WHERE id = '$id' ";

$result = mysqli_query($conn, $query);

if ($result) {
    header ("location:index.php?edit=sukses");
} else {
    header ("location:index.php?edit=gagal");
}
?>