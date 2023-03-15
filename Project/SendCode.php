<?php

session_start();

$host = 'localhost';
$db = 'project_pastebin';
$user = 'bit_academy';
$pass = 'bit_academy';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

// shows version of the database    
try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    echo 'error connecting to database :( on line : ' . $e->getMessage();
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Send Code</title>
</head>

<body style="background-color: #392A4D;">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <nav class="navbar navbar-expand-lg" style="background-color: #2A1C3D;">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="fw-bold navbar-brand" href="index.php" style="color:white;">TotalCode B.V.</a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left: 650px;">
                    <li class="nav-item">
                        <a class="fw-bold nav-link" href="SendCode.php" style="color:white;text-decoration:underline">Send Code</a>
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
    <code>
        <div class="container-fluid" style="margin-top: 2%;">
            <div class="row">
                <div class="col-sm-5">
                    <div class="w-100 p-5 " style="background-color:#533E6D; height:700px;">
                        <h1 class="fw-bold text-white " style="font-size: 20px; margin-left: 35%;">Voer hier de code in:</h1>
                        <div class="col-sm-12">
                            <div class="form-floating">
                                <textarea class="fw-bold form-control" style="height: 580px; background-color:#684F86; color:white;" placeholder="Leave a comment here" id="code" name="code"></textarea>
                                <label class="fw-bold" for="code" style="color:white;">Code</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                </div>
                <div class="col-sm-4">
                    <div class="w-100 p-5" style="background-color:#533E6D; height:700px;">
                        <form>
                            <label for="inputPassword5" class="fw-bold form-label" style="color:white;">Name:</label>
                            <input type="text" name="Author" id="name" class="form-control" style="background-color:#684F86;" aria-describedby="passwordHelpBlock">
                            <br>
                            <label for="inputPassword5" class="fw-bold form-label" style="color:white;">Code title:</label>
                            <input type="text" name="Title" id="CodeTitle" class="form-control" style="background-color:#684F86;" aria-describedby="passwordHelpBlock">
                            <br>
                            <div class="form-floating">
                                <textarea name="CodeFuntion" class="fw-bold form-control" style="height:400px; background-color:#684F86; color:white;" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                <label for="floatingTextarea" class="fw-bold" style="color:white;">Code Funtion</label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 mt-3" style="display: flex; justify-content: center;">
                <button type="button" id="submit-button" class="fw-bold" style="background-color:#533E6D; color:white; border-color:white; width:100%; align-items:center;">Post code</button>
            </div>
        </div>
        <!-- Voeg hier eventuele JavaScript-bestanden toe -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.2.0/highlight.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#code').keypress(function(event) {
                    if (event.keyCode === 13) {
                        event.preventDefault();
                        $('#submit-button').click();
                    }
                });

                $('#submit-button').click(function() {
                    var code = $('#code').val();
                    if (code.trim() == '') {
                        alert('Voer een code in.');
                        return;
                    }
                    var form = $('<form>', {
                        'action': 'SendConfirm.php',
                        'method': 'POST'
                    }).append($('<input>', {
                        'type': 'hidden',
                        'name': 'code',
                        'value': code
                    }));
                    $('body').append(form);
                    form.submit();
                });
            });
        </script>
        <script>
            // Highlight de code
            $(document).ready(function() {
                var code = $('#code').text()
                hljs.highlight('php'.code);
                hljs.highlight('css', code);
                hljs.highlight('html', code);
                hljs.highlight('sql', code);
            });
        </script>
    </code>
</body>

</html>