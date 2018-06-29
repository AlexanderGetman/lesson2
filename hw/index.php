<?php
$x = rand(0,100);
echo "Число $x<br>";
$var1 = 1;
$var2 = 1;

while (true) {
    if ($var1 > $x) {
        echo "задуманное число НЕ входит в числовой ряд<br>";
        break;
    } elseif ($var1 === $x) {
        echo "задуманное число входит в числовой ряд<br>";
        break;
    }
    $var3 = $var1;
    $var1 += $var2;
    $var2 = $var3;
}

?>