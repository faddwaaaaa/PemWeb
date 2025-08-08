<?php
$angka = [2, 1, 19, 7, 0];

// sort($angka);
// foreach ($angka as $a) {
//     echo $a . " ";
// }

for ($i = 0; $i < count($angka); $i++) {
    if ($angka[$i++]) {
        echo $angka[$i] . " ";
    }
}

?>