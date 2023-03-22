<?php

echo '<h1>Adding to Arrays</h1>';

$programmingLanguages = ['PHP', 'C++', 'C#', 'Python', 'Java'];

$programmingLanguages[] = 'Ruby';

array_push($programmingLanguages, 'Perl', 'C');

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

$personalDetails = [
    'name' => 'Jane Doe',
    'age' => '21',
    'Town' => 'Bath'
];

//Don't do this with an associative array!
array_push($personalDetails, 'Perl', 'C');

echo '<pre>';
print_r($personalDetails);
echo '</pre>';

asort($personalDetails);

echo '<pre>';
print_r($personalDetails);
echo '</pre>';
