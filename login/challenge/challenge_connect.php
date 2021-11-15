<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connect</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    
$localhost = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "ristorante";

// create connection
$connect = mysqli_connect($localhost, $username, $password, $dbname);
// check connection
if (!$connect) {
   die("Connection failed: " . mysqli_connect_error());
}


    ?>
</body>
</html>