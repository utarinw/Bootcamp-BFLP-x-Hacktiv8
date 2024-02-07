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

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Gaji Bersih</title>
</head>
<body>
    <h2>Kalkulator Gaji</h2>

    <div class="col">
        <form action="gaji.php" method="post">
            <label for="gapok_value">Masukkan Gaji Pokok</label> 
            <input type="number" name="gapok_value" required>
            <br>
            <label for="tunjangan_value">Masukkan Tunjangan</label>
            <input type="number" name="tunjangan_value" required>
            <br>
            <input type="submit" value="Hitung"></input>
        </form>
    </div>
    <script src="js.Js"></script>
    <script src="style.css"></script>
</body>
</html>