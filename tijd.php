<?php


    $values = explode(" ", $argv[1]);
    $total = 0;

    foreach ($values as $value) {
        switch (substr($value, -1)) {
            case "s":
                $total += substr($value, 0, -1);
            break;
            case "m":
                $total += substr($value, 0, -1) * 60;
            break;
            case "h":
                $total += substr($value, 0, -1) * 60 * 60;
            break;
            case "d":
                $total += substr($value, 0, -1) * 24 * 60 * 60;
            break;
        }
    }
    echo $total;
