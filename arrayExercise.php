<?php

echo '<h1>Array Exercise</h1>';

$demiGreyhounds = ['Phil', 'James', 'Henry', 'Dom', 'Adam'
    , 'Brent', 'Michael', 'Anna'];

foreach ($demiGreyhounds as $greyhound) {
    echo '<p>' . $greyhound . '</p>';
}

echo '<br><h2>This time more random</h2>';

shuffle($demiGreyhounds);

echo '<pre>';
print_r($demiGreyhounds);
echo '</pre>';
