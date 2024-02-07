<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $nilaInput = $_POST['nilai'];

        if ($nilaInput > 85 && $nilaInput<=100){
            echo "A";
        } elseif ($nilaInput > 75 && $nilaInput<=84){
            echo "B";
        } elseif ($nilaInput > 60 && $nilaInput<=75){
            echo "C";
        } elseif ($nilaInput > 50 && $nilaInput<=59){
            echo "D";
        } else{
            echo "E";
        }
    }
?>