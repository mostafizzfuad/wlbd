<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Contact Form</h4>
                    </div>
                    <div class="card-body">
                        <form action="./action.php" method="post">
                            <input type="text" name="name" class="form-control" placeholder="Enter your name">
                            <input type="email" name="email" class="form-control mt-2" placeholder="Enter your email">
                            <input type="number" name="number" class="form-control mt-2" placeholder="Enter your phone number">
                            <input type="password" name="password" class="form-control mt-2" placeholder="Enter your password">
                            <div class="d-grid mt-2">
                                <button type="submit" class="btn btn-success">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>


<!----------- 
$_GET
$_POST
$_REQUEST
------------->