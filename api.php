<?php
    // Max number of the items - user can change that
    $max = 100;
    $x = 1;
    $final = array();

    function checkNumber($number) {
        $output = $number;
        if ($number % 3 == 0 && $number % 5 == 0) {
            $output = 'Coating Damage and Lightning Stripe';
        }else if ($number % 3 == 0) {
            $output = 'Coating Damage';
        }else if ($number % 5 == 0) {
            $output = 'Lightning Stripe';
        }
        return $output;
    };
    while($x <= $max) {
        array_push($final, checkNumber($x));
        $x++;
    }

    echo json_encode($final);
?>