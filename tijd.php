<?php

foreach ($argv as $arr) {
    $ltr = substr($arr, -1);
    $nmr = explode(" ", $arr, 0);

    foreach ($nmr as $nmrWaarde) {
        $nmrGetal = substr($nmrWaarde, 0, -1);
    }
    $sArr [$ltr] = $nmrGetal;
    
    // print_r($sArr);

    foreach ($sArr as $key => $value) {
        for ($i = 0; $i < count($sArr); $i ++) {
            switch ($ltr) {
                case "s":
                $s = (int) $sArr["s"];
            break;
                case "m":
                $m = (int) $sArr["m"];
            break;
            case "h":
                $h = (int) $sArr["h"];
            break;
            case "d":
                $d = (int) $sArr["d"];
            break;
            }
        }
    }
}
$totalMinut = $m * 60;  
$totalHour = $h * 60 * 60;
$totalDay = $d * 24 * 60 * 60;
$totalAll = $totalMinut + $totalHour + $totalDay + $s;
echo $totalAll;