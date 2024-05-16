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
        'city' => 'Barisal',
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
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Complex Multidimensional Array</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 ">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Student Details</h4>
                </div>
                <div class="card-body">
                    <?php
                    foreach ($student_details as $student_detail)
                    {
                        echo "<ul>";
                        foreach ($student_detail as $key => $student)
                        {
                            ?>
                            <li class="text-capitalize">
                    <?php
                            if ($key == 'language')
                            {
                                echo $key;
                                echo "<ul>";
                                foreach ($student as $language)
                                {
                                    ?>
                                    <li><?= $language ?></li>
                                <?php
                                }
                                echo "</ul>";
                            }
                            else
                            {
                                echo "$student ";
                            }
                            echo "</li>";
                        }
                        echo "</ul>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>