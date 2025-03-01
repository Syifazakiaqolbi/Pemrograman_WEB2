<?php
    $ar_buah = ["Pepaya", "Mangga", "Pisang", "Jambu"];
// Menampilkan buah index ke 1
    echo $ar_buah[1];
// Menampilkan jumlah buah
    echo "<br/>Jumlah buah : " .count($ar_buah);
// Menampilkan seluruh buah
    echo "<ol> ";
    foreach ($ar_buah as $buah) {
        echo "<li>". $buah . "</li>";
    }
    echo "</ol>";
// Menambahkan Buah 
    $ar_buah[] = "Apel";
// Menghapus buah index ke 1
    unset($ar_buah[1]);
// Mengubah index ke 2 menjadi manggis
    $ar_buah[2] = "Manggis";
// Menampilkan seluruh buah dengan index nya
    echo "<ul>";
    foreach ($ar_buah as $buah => $v) {
        echo "<li> Buah Index - " .$buah. " adalah " .$v. "</li>";
    }
    echo "</ul>"

    
?>