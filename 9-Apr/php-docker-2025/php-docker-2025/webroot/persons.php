<?php
$person1 = [
    'id' => 1,
    'name' => 'John',
    'surname' => 'Smith',
    'email' => 'john@example.com',
    'phone' => '555-555-5555'
];

$person2 = [
    'id' => 2,
    'name' => 'Hello',
    'surname' => 'Water',
    'email' => 'Water@example.com',
    'phone' => '666-666-6666'
];

$persons = [$person1, $person2];
//var_dump($persons);
// http://localhost:8001/persons.php

foreach ($persons as $person) {
    echo $person['name'] . ' ' . $person['surname'] . '<br>';

}
