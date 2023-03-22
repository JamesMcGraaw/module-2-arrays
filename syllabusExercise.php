<?php

echo '<h1>Original Exercise</h1>';

$nums = [1, 2, 3, 4, 5, 6, 7, 8];

echo '<pre>';
print_r($nums);
echo '</pre>';

echo '<h1>Add 9</h1>';

$nums[] = 9;

echo '<pre>';
print_r($nums);
echo '</pre>';

echo '<h1>Add 10</h1>';

array_push($nums, 10);

echo '<pre>';
print_r($nums);
echo '</pre>';

echo '<h1>Randomise</h1>';

shuffle($nums);

echo '<pre>';
print_r($nums);
echo '</pre>';

echo '<h1>Even</h1>';

foreach ($nums as $num) {
    if ($num % 2 === 0) {
        echo '<p>' . $num . '</p>';
    }
}

echo '<h1>Odd</h1>';

foreach ($nums as $num) {
    if ($num % 2 != 0) {
        echo '<p>' . $num . '</p>';
    }
}