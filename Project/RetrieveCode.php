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

$stmt = $pdo->prepare("SELECT * FROM code_table");
$stmt->execute();
$film_array = $stmt->fetchAll(PDO::FETCH_OBJ);

function echoCode()
{
    global $film_array;
    foreach ($film_array as $key) {
        echo
        '<tr>
            <td>';
        echo $key->code_title;
        echo '</td>
            <td><a class="fw-bold" href="codeDetails.php?id=';
        echo $key->code_id;
        echo '">';
        echo $key->code_author;
        echo '</a></td>
        </tr>';
    }
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
            <a class="fw-bold nav-link" href="RetrieveCode.php" style="color:white;text-decoration:underline">Retrieve Code</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="col-sm-1">
  </div>
  <div class="col-sm-10">
    <table class="table table-bordered" style="background-color:#47365B; color:white; margin-left:10%;">
      <thead>
        ...
      </thead>
      <tbody>
        <tr class="table-active">
          ...
        </tr>
        <tr>
          ...
        </tr>
        <th>
          Code title:
        </th>
        <th>Made by:</th>
         <?php echoCode() ?>

      </tbody>
    </table>
  </div>
  <div class="col-sm-1">
  </div>

</body>

</html>