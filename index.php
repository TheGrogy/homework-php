<?php

$array = [
    [
        'firstName' => 'Den',
        'age' => 16,
        'SecondName' => 'funny type',
        
    ],

    [
        'firstName' => 'Dima',
        'age' => 14,
        'SecondName' => 'genius of minecraft',
        
    ],

    [
        'firstName' => 'DIma',
        'age' => 16,
        'SecondName' => 'general Dima',
        
    ],

    [
        'firstName' => 'Sergey' ,
        'age' => 16,
        'SecondName' => 'simple genius',
        
    ],
];

print('<pre>');
print_r($array);
print('<pre>');

function show($array)
{
    echo "$array[0]";
}

?>