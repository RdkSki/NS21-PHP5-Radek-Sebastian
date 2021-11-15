<?php
    require_once 'challenge_connect.php';
    $sql = "SELECT * FROM dishes";
    $result = mysqli_query($connect, $sql);
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
   
    
    
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      foreach ($rows as $value) {
        echo "<div id='cards' class='fs-3'><p><img class='rounded' src='{$value['image']}' width='200'><br>" . $value['dishName'] . "<br>" . $value['dishPrice'] . " €<br> " . $value['dishscription'] . "
            <br><a class='del' href='challenge_delete.php?id={$value['dishID']}'>delete</a></p></div><hr>";
    }
    
    
    
    ?>
</body>
</html>