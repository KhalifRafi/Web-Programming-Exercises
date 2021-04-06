<?php

function hitungDenda($tglHarusKembali, $tglKembali){
    $thk = explode("-", $tglHarusKembali);
    $dTHK = $thk[2];
    $mTHK = $thk[1];
    $yTHK = $thk[0];

    $tk = explode("-", $tglKembali);
    $dTK = $tk[2];
    $mTK = $tk[1];
    $yTK = $tk[0];
    
    $jdTHK = GregorianToJD($mTHK, $dTHK, $yTHK);
    $jdTK = GregorianToJD($mTK, $dTK, $yTK);
    
    $selisihHari = $jdTK - $jdTHK;
    
    $biayaDenda = $selisihHari * 3000;
    return $biayaDenda;

}
$hasil = hitungDenda("2021-10-12", "2021-10-16");
echo "Besarnya denda adalah Rp. $hasil";
?>