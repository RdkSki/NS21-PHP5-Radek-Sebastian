<?php
session_start();
require_once 'challenge_connect.php';

// it will never let you open index(login) page if session is set
if (isset($_SESSION['user']) != "") {
    header("Location: challenge_home.php");
    exit;
}
if (isset($_SESSION['adm']) != "") {
    header("Location: ../loginUser/dashBoard.php"); // redirects to dashBoard.php
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
        <h2 class="text-center pt-5 text-warning">Ristorante Portofino</h2>
    <div id="div" class="fs-3"><a class="a" href="../loginUser/register.php">Sign up</a><span>   </span><a href="../loginUser/index.php">Log in</a></div><br><br>
    <footer class='text-center bg-dark text-light pt-2 fs-3 mt-2'>Radek Slowinski - 2021</footer>
</body>

</html>