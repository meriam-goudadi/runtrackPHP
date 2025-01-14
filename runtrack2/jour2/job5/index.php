<?php
function isPrime($number) {
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

for ($i = 2; $i <= 1000; $i++) {
    if (isPrime($i)) {
        echo "$i<br>";
    }
}
?>