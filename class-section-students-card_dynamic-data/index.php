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
?>

<!-- html code -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Class | Section | Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- container start -->
    <div class="container">
        <!-- row 1 start -->
        <div class="row justify-content-center">
            <?php foreach ($data as $classes) { ?>
            <!-- col-md-6 start -->
            <div class="col-md-6 mt-4">
                <!-- card 1 start -->
                <div class="card">
                    <?php foreach ($classes as $class_name => $class) {
                        if (!is_array($class)) {
                            ?>
                            <div class="card-header text-center">
                                <h3><?= $class ?></h3>
                            </div>
                            <div class="card-body">
                                <!-- row 2 start -->
                                <div class="row">
                                    <?php
                                    } else {
                                        foreach ($class as $sections) {
                                            ?>
                                            <div class="col-md-4">
                                                <!-- section card start -->
                                                <div class="card">
                                                    <?php foreach ($sections as $section) {
                                                        if (!is_array($section)) {
                                                            ?>
                                                            <div class="card-header">
                                                                <h5><?= $section ?></h5>
                                                            </div>
                                                            <?php
                                                        } else {
                                                            ?>
                                                            <div class="card-body">
                                                                <ol>
                                                                    <?php foreach ($section as $student) {
                                                                        ?>
                                                                        <li><?= $student ?></li>
                                                                        <?php
                                                                    } ?>
                                                                </ol>
                                                            </div>
                                                            <?php
                                                        }
                                                    } ?>
                                                </div>
                                                <!-- section card end -->
                                            </div>
                                            <?php }}}
                                        ?>
                                    </div>
                                <!-- row 2 end -->
                            </div>
                </div>
                <!-- card 1 end -->
            </div>
            <!-- col-md-6 end -->
            <?php } ?>
        </div>
        <!-- row 1 end -->
    </div>
    <!-- container end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>