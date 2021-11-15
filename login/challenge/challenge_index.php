<?php
require_once 'challenge_connect.php';
$sql = "SELECT * FROM dishes";
//$sql2 = "SELECT description FROM details";
$result = mysqli_query($connect, $sql);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
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
    <div id="div" class="fs-3"><!--<a href="challenge_create.php" id="fff">Create new record</a><br>--><a class="a" href="/login/register.php">Sign up</a><span>   </span><a href="index.php">Log in</a></div><br><br>
    <?php
    foreach ($rows as $value) {
        echo "<div id='cards' class='fs-3'><p><img class='rounded' src='{$value['image']}' width='200'><br>" . $value['dishName'] . "<br>" . $value['dishPrice'] . " €<br> " . $value['dishscription'] . "
            <br></p><!--<a class='del' href='challenge_delete.php?id={$value['dishID']}'>delete</a>--></div><hr>";
    }
    // <a class='del' href='challenge_details.php?id='{$value['dishID']}'>details</a>
    ?>
</body>

</html>