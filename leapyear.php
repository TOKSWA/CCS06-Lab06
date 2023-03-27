<?php
$year = 4;
while ($year <= 2024) {
if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
echo $year . "\n";
}
$year++;
}
?>


