<?php 
    
    function hitung($pokok, $tunjangan, $potongan){
        $bruto = $pokok + $tunjangan;
        $pajak = $bruto * 0.1;
        $asuransi = $bruto * 0.05;
        $bersih = $bruto - ($pajak + $asuransi);
         
        echo "<p>Bruto anda $bruto</p>";
        echo "<p>Pajak anda $pajak</p>";
        echo "<p>Asuransi anda $asuransi</p>";
        echo "<p>Gaji bersih anda $bersih</p>";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {  
        $pokok = $_POST["pokok"];
        $tunjangan = $_POST["tunjangan"];
        $potongan = $_POST["potongan"];

        hitung($pokok, $tunjangan, $potongan);

    }
?>