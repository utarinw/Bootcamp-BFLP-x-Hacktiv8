<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $gapok = $_POST['gapok_value'];
        $tunjangan = $_POST['tunjangan_value'];
        
        $gaji_bruto = $gapok + $tunjangan;
        $pajak = 0.1*$gaji_bruto;
        $asuransi = 0.05*$gaji_bruto;

        $gaji_bersih = $gaji_bruto-($pajak+$asuransi);
        
        echo "Gaji Bersih Rp. $gaji_bersih" ;                      
    }
?>

