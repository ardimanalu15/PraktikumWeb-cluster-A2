<?php
    function faktorial($c)
    {
        $hasil = $c;
        for ($i = 1; $i < $c; $i++) {
            $hasil = $hasil * $i;
        }
        return $hasil;
    }

    $a = 1;
    $b = 10;

    for($i=$a; $i<=$b; $i++){
        echo "<br>Nilai dari Faktorial " . $i . " : " . faktorial($i);
    }    
?>