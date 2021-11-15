<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
require_once 'challenge_connect.php';

if(isset($_GET["id"])){
   $id = $_GET["id"]; 

   $sql = "DELETE FROM dishes WHERE dishID = $id";
   if(mysqli_query($connect, $sql) == true){
       echo "Record deleted <br>
        <a href='challenge_index.php'>Home</a>";
   }
}
    ?>
      <footer class='text-center bg-dark text-light pt-2 fs-3 mt-2'>Radek Slowinski - 2021</footer>
</body>
</html>