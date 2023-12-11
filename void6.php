<?php 
    // fungsi
    function hitungUmur($thn_lahir, $thn_sekarang){
        $umur = $thn_sekarang - $thn_lahir;
        return $umur;
    }

    function perkenalan($nama, $salam= "Assalamualaikum"){
        echo $salam.", ";
        echo "Perkenalkan, nama saya ".$nama."<br/>";
        // memanggil fungsi yg lain
        echo "Saya Berusia ".hitungUmur(2005, 2023) ."tahun<br>";
        echo "Senang berkenalan dengan anda<br>";
    }

    // memanggil fungsi perkenalan
    perkenalan("Ardinata");
?>