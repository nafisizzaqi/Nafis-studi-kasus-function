
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studi Kasus Function</title>
</head>
<body>
    
<h1>Studi Kasus</h1>
<?php 

    //studi kasus 1
    function luasPersegi($panjangsisi){
        if ($panjangsisi > 0) {
            $luas = $panjangsisi**2;
            echo "panjang sisi : " . $panjangsisi . " Luas persegi adalah : " . $panjangsisi . " x " . $panjangsisi . " = " . $luas; 
        } elseif ($panjangsisi < 0) {
            echo "panjang sisi : " . $panjangsisi . " panjang sisi merupakan bilangan negatif";
        }
    }

    LuasPersegi(2);
    echo "<br>";
    echo "<br>";
    LuasPersegi(-2);

    //studi  kasus 2
    function cekBil($array){
        if (is_array($array)) {
            foreach($array as $number){
                if (is_integer($number)) {
                    if (is_float($number)) {
                        exit;
                    }
                    if ($number % 2 == 1) {
                        echo $number . ",";
                    }
                }
            }
            if (!is_integer($number) && !is_float($number)) {
                echo "Nilai yang anda masukkkan bukan angka";
            }
        }else {
            echo "anda tidak memasukkan array";
        }
    }
   echo "<br>";
   cekBil([1,2,3,1.2,4,5,6,7]);
   echo "<br>";
   cekBil(["anjai"]);
?>
</body>
</html>