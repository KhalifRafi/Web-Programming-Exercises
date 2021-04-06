<?php

function hitungGaji($gol, $masaKerja){
    if($gol == "A"){
        // masa kerja saya buat bilangan bulat dan dalam bentuk tahun
        if($masaKerja < 10){
            $gaji = 5000000;
        }else{
            $gaji = 7000000;
        }
    }else if($gol == "B"){
        if($masaKerja < 10){
            $gaji = 6000000;
        }else{
            $gaji = 8000000;
        }
    }
    return $gaji;
}
$hasil = hitungGaji("B", 10);
echo "Rp. $hasil";
?>