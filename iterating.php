<?php

echo '<h1>Iterating through Arrays</h1>';

$days = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];

$personalDetails = [
    'name' => 'Jane Doe',
    'age' => '21',
    'Town' => 'Bath'
];


echo '<h2>While Loop</h2>';

$daysArrayLength = count($days);

$i = 0;
while ($i < $daysArrayLength) {
    echo '<p>' . $days[$i] . '</p>';
    $i++;
}

echo '<h2>For Loop</h2>';

for ($i = 0; $i < $daysArrayLength; $i++) {
    echo '<p>' . $days[$i] . '</p>';
}

echo '<h2>Foreach Loop</h2>';

foreach ($days as $day) {
    echo '<p>' . $day . '</p>';
}

foreach ($days as $day) {
    if ($day === 'Sat') {
        continue;   //Misses out the echo line, so will skip Saturday
    }
    echo '<p>' . $day . '</p>';
}

foreach ($personalDetails as $detail) {
    echo '<p>' . $detail . '</p>';
}

foreach ($personalDetails as $key => $detail) {
    echo '<p>' . $key . ' is ' . $detail . '</p>';
}


echo '<h2>Exercise Loop</h2>';

$nuns = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

for ($x = 1; $x < count($nuns); $x += 2) {
        echo '<p>' . $nuns[$x] . '</p>';
}

foreach ($nuns as $nun) {
    if ($nun % 2 === 0 ) {
        echo '<p>' . $nun . '</p>';
    }
}