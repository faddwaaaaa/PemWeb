<?php
require "../public/functions.php";
$id = $_GET['id'];

$query = "DELETE FROM siswa01 WHERE id = '$id' ";

$result = mysqli_query($conn, $query);

if ($result) {
    header ("location:index.php?hapus=sukses");
} else {
    header ("location:index.php?hapus=gagal");
}
?>