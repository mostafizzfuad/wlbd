<?php
$data = 
[
    [
        'class' => 'Class One',
        [
            'section' =>
            [
                'name' => 'Section A',
                'students' => ['fuad', 'siam', 'rasel', 'habib'],
            ]
        ],
        [
            'section' =>
            [
                'name' => 'Section B',
                'students' => ['rahim', 'siam', 'rasel', 'habib'],
            ]
        ],
        [
            'section' =>
            [
                'name' => 'Section C',
                'students' => ['karim', 'siam', 'rasel', 'habib'],
            ]
        ],
    ],
    [
        'class' => 'Class Two',
        [
            'section' =>
            [
                'name' => 'Section A',
                'students' => ['fuad2', 'siam2', 'rasel2', 'habib2'],
            ]
        ],
        [
            'section' =>
            [
                'name' => 'Section B',
                'students' => ['rahim2', 'siam2', 'rasel2', 'habib2'],
            ]
        ],
        [
            'section' =>
            [
                'name' => 'Section C',
                'students' => ['karim2', 'siam2', 'rasel2', 'habib2'],
            ]
        ],
    ],
];


// code starts here : 

foreach ($data as $classes) 
{
    foreach ($classes as $class_name => $class) 
    {
        if (is_array($class)) 
        {
            foreach ($class as $sections) 
            {
                foreach ($sections as $section) 
                {
                    if (is_array($section)) 
                    {
                        foreach ($section as $student)
                        {
                            echo "<p> $student</p>";
                        }
                    }
                    else
                    {
                        echo "<h3> $section </h3>";
                    }
                }
            }
        } 
        else 
        {
            echo "<h2> $class </h2>";
        }
    }
}