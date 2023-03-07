<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>

<body style="background-color: #392A4D;">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-lg" style="background-color: #2A1C3D;">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="fw-bold navbar-brand" href="index.php" style="color:white;">Total Code B.V.</a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left: 650px;">
                    <li class="nav-item">
                        <a class="fw-bold nav-link" href="SendCode.php" style="color:white;">Send Code</a>
                    </li>
                    <li class="nav-item">
                        <a class="fw-bold nav-link" style="color:white;">|</a>
                    </li>
                    <li class="nav-item">
                        <a class="fw-bold nav-link" href="RetrieveCode.php" style="color:white;">Retrieve Code</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid" style="margin-top: 2%;">
        <div class="row">
            <div class="col-sm-5">
                <div class="w-100 p-5 " style="background-color:#533E6D ; height:700px;">
                    <h1 class="fw-bold text-white " style="font-size: 20px; margin-left: 35%;">Paste your code here</h1>
                    <div class="col-sm-12">
                        <div class="form-floating">
                            <textarea class="fw-bold form-control" style="height: 580px; background-color:#684F86; color:white;" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                            <label class="fw-bold"for="floatingTextarea" style="color:white;">Code</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
            </div>
            <div class="col-sm-4">
                <div class="w-100 p-5" style="background-color:#533E6D; height:700px;">
                    <label for="inputPassword5" class="fw-bold form-label" style="color:white;">Name:</label>
                    <input type="text" id="inputPassword5" class="form-control" style="background-color:#684F86;" aria-describedby="passwordHelpBlock">
                    <br>
                    <label for="inputPassword5" class="fw-bold form-label" style="color:white;">Code title:</label>
                    <input type="text" id="CodeTitle" class="form-control" style="background-color:#684F86;" aria-describedby="passwordHelpBlock">
                    <br>
                    <div class="form-floating">
                        <textarea class="fw-bold form-control" style="height:400px; background-color:#684F86; color:white;" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea" class="fw-bold" style="color:white;">Code Funtion</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="margin-top: 2%;">
            <div class="row">
                <div class="col-sm-12">
                    <div class="col-sm-12">
                        <button class="fw-bold" style="background-color:#533E6D; color:white; width:100%; height:70px;align-items:center;">Post code</button>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>