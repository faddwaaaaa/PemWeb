<?php
$id = 1;
$b = 0.1;
$c = false;
$d = "Belajar PHP";
$e = "Fadwa Pamulasih";
$f = "18482";
$g = "29-07-2008";
$h = "18:00";
$tanggal = strtotime($g);
$waktu = date('Y-m-d',$tanggal);
$data_array = array($b,$c,$d,$e,$f,$tanggal,$waktu);

echo "<br>";
echo "Hari ini tanggal " . date('Y-m-d') . "<br>";

echo "Hasil Perintah For" . "<br>";
for ($j=0; $j < count($data_array); $j++){
    echo $data_array[$j] . "<br>";
}
echo "<br><br>";

echo "Hasil Perintah Foreach" . "<br>";
foreach ($data_array as $data) {
    echo $data . "<br>";
}
echo "<br><br>";

echo "Hasil Perintah While" . "<br>";
$w = 0;
$y = count($data_array);
while($w < $y){
    echo $data_array[$w] . "<br>";
    $w++;
}


// var_dump($data_array);
?>