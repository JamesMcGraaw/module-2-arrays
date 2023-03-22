<?php

echo '<h1>Indexed Arrays</h1>';

$personalDetails = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];

echo '<pre>';
print_r($personalDetails);
echo '</pre>';

echo $personalDetails[1];

$rando = [1 => 'One', 4 => 'Four', 7 => 'Seven'];

echo '<pre>';
print_r($rando);
echo '</pre>';


$rando[] = 'Nine';
echo '<pre>';
print_r($rando);
echo '</pre>';