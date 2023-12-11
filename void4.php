<?php 
    // fungsi
    function perkenalan($nama, $salam= "Assalamualaikum"){
        echo $salam.", ";
        echo "Perkenalkan, nama saya ".$nama."<br/>";
        echo "Senang berkenalan dengan anda<br>";
    }

    // memanggil fungsi
    perkenalan("Upin", "Halo");

    echo"<hr>";

    $saya = "Chris";
    $ucapanSalam = "Selamat Pagi";
    // memanggilnya lagi tanpa mengisis parameter salam
    perkenalan($saya);
?>