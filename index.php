<?php

$users = [
    [
        'firstName' => 'Den',
        'age' => 16,
        'SecondName' => 'funny type',
        
    ],
    [
        'firstName' => 'Dima',
        'age' => 14,
        'second_Name' => 'genius of minecraft',
        
    ],
    [
        'firstName' => 'DIma',
        'age' => 16,
        'second_Name' => 'general Dima',
        
    ],
    [
        'firstName' => 'Sergey' ,
        'age' => 16,
        'second_Name' => 'simple genius',
        
    ],
];

print('<pre>');
print_r($users);

function show():array {
    return [
        'firstName' => 'Dima',
        'age' => 14,
        'second_Name' => 'genius of minecraft'
    ];
}

print_r(show());
print('</pre>');

function get_users():array {
    $userslist = [];

    for ($i = 5; $i <= 10; $i++) {
        $userslist[] = show();
    }

    return $userslist;
}

print('<pre>');
print_r(get_users());
print('</pre>');
