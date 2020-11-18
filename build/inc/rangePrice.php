<?php
function rangePrice($tarifs) {
    $max=0;
    $min=10000000;
    foreach ( $tarifs as $item ) {
        $cost = $item['price'] / $item['pay_period'];
        if ($cost > $max) {
            $max = $cost;
        }

        if ($cost < $min) {
            $min = $cost;
        }
    }
    return $min.' — '.$max;
}
?>
