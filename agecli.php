<?php
$name = $argv[1];
$birthYear = $argv[2];

$currentYear = date('Y');
$age = $currentYear - $birthYear;

echo "Your name is $name, and your age is $age years old\n";

    if ($age >= 18) {
         echo "You are a voter\n";
}
    if ($age >= 60) {
        echo "You are a senior citizen\n";
}
?>
