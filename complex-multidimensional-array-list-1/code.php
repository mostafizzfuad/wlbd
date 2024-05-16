<?php

$student_details = [
    [
        'name' => 'Fuad',
        'age' => 25,
        'city' => 'Dhaka',
        'phone' => '01794058575',
        'language' => ['HTML', 'CSS', 'JS', 'PHP', 'Python'],
    ],
    [
        'name' => 'Siam',
        'age' => 15,
        'city' => 'Barishal',
        'phone' => '01584058579',
        'language' => ['HTML', 'CSS', 'Python'],
    ],
    [
        'name' => 'Junnun',
        'age' => 23,
        'city' => 'Khulna',
        'phone' => '01874058574',
        'language' => ['JS', 'PHP', 'C#'],
    ]
];


// traverse through foreach loop
foreach ($student_details as $student_detail) {
    foreach ($student_detail as $key => $student) {
        if ($key == 'language') {
            foreach ($student as $language) {
                echo "$language ";
            }
        } else {
            echo "$student ";
        }
    }
    echo "\n";
}
