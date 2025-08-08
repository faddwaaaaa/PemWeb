<?php
$arrBuku = array("Pemrograman OOP","Elex Media Komputindo",1000,"10%");
$c = count($arrBuku);
echo $c;
echo "<br>";

$arrBuku01 = ["Pemrograman Web", "Andy Offset"];
$arrmulti01 = [
    ["Pemrograman OOP","Elex Media Komputindo",1000,"10%"],
    ["Pemrograman Web","Andy Offset",1100,"15%"],
    ["Algoritma dan Pemrograman Dasar","Antony Pranata",2000,"10%"],
    ["Pemrograman C++","Anyflip",1500,"25%"],
    ["Python","Gramedia",2500,"20%"]
];

$b = count($arrmulti01);
echo $b;

//for ($b = 0; $b < count($arrmulti01); $b++){
//    for($d = 0; $d < 4; $d++){
//        echo $arrmulti01[$b][$d];
//    }
//}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Array</h1>
    <button><a href="">Tambah Data</a></button>
    <table border="1">
        <tr>
            <td>No</td>
            <td>Judul Buku</td>
            <td>Penerbit</td>
            <td>Harga</td>
            <td>Diskon</td>
            <td colspan="2">Status</td>
        </tr>
        <?php 
        for($b = 0; $b < count($arrmulti01); $b++): ?>
            <tr>
                <td><?= $b+1; ?></td>
        <?php
            for($d = 0; $d < 4; $d++):
        ?>
            <td><?= $arrmulti01[$b][$d]; ?></td>
            <?php endfor; ?>
            <td><a href="">Edit</a></td>
            <td><a href="">Delete</a></td>
        <?php endfor; ?>
        </tr>
    </table>
    
    <br><hr><br>

        <table border="1">
        <tr>
            <td>No</td>
            <td>Judul Buku</td>
            <td>Penerbit</td>
            <td>Harga</td>
            <td>Diskon</td>
            <td colspan="2">Status</td>
        </tr>
        <?php 
        $e = 1;
        foreach($arrmulti01 as $arr1): ?>
            <tr>
                <td><?= $e++ ?>.</td>
        <?php
            foreach($arr1 as $data):
        ?>
            <td><?= $data; ?></td>
            <?php endforeach; ?>
            <td><a href="">Edit</a></td>
            <td><a href="">Delete</a></td>
        <?php endforeach; ?>
        </tr>
    </table>
</body>
</html>