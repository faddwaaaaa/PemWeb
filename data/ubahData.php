<?php
require "../public/functions.php";
$id = $_POST['id'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$nilai = $_POST['nilai_mtk'];

$query = "UPDATE siswa SET 
        nis = '$nis' , 
        nama = '$nama' , 
        nilai_mtk = '$nilai' 
        WHERE id = '$id' ";

$result = mysqli_query($conn, $query);

if ($result) {
    header ("location:../app/index.php?edit=sukses");
} else {
    header ("location:../app/index.php?edit=gagal");
}
?>