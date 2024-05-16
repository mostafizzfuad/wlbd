<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Class | Section | Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <?php for ($i = 1; $i <= 4; $i++) { ?>
                <div class="col-md-12 mt-4">
                    <div class="card">
                        <div class="card-header text-center">
                            <h3>Class : <?php echo $i ?></h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <?php for ($j = 1; $j <= 3; $j++) { ?>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-header text-center">
                                                <h3>Section : <?php echo $j ?></h3>
                                            </div>
                                            <div class="card-body">
                                                <ol>
                                                    <?php for ($k = 1; $k <= 10; $k++) { ?>
                                                        <li>Student <?php echo $k ?></li>
                                                    <?php } ?>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>