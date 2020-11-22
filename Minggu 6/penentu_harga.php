<?php
    function harga($name, $color = "Merah")
    {
        $length = strlen($name);

        if ($length <= 10) {
            $harga = $length * 300;
        } else if ($length <= 20) {
            $harga = $length * 500;
        } else {
            $harga = $length * 700;
        }
        echo "<br> Bet " . $color . " dengan nama " . $name . ", seharga " . $harga;
    }

    $name1 = "Ardi ";
    $name2 = "Gaya";
    $name3 = "Manalu";
    $name4 = "Ardi Gaya Manalu";
    echo harga($name1, "Abu-Abu");
    echo harga($name2, "Hijau Army");
    echo harga($name3, "Merah" );
    echo harga($name4);

    //118140088_ARDI GAYA MANALU
    ?>