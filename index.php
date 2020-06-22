<?php

$file = "./pages/inicio.php";

if ($_GET["page"]) {

  $file = "./pages/" . $_GET["page"] . ".php";
  $file_exists = file_exists($file);

  if (!$file_exists) {
    $file = "./pages/404.php";
  }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>me & lu</title>
  <link rel="stylesheet" href="./css/bootstrap.min.css" />
  <link rel="stylesheet" href="./css/styles.css" />
</head>

<body>

  <?php include_once("./components/navbar.php"); ?>

  <main role="main">
    <?php include_once($file); ?>
  </main>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="./js/bootstrap.min.js"></script>
</body>

</html>