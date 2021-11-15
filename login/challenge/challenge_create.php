<?php
   require_once 'challenge_connect.php';

   if(isset($_POST["submit"])){ 
       $image = $_POST["image"]; 
       $dishName = $_POST["dishName"]; 
       $dishPrice = $_POST["dishPrice"];
       $dishScription = $_POST["dishScription"];
       $sql = "INSERT INTO dishes (image, dishName, dishPrice, dishScription) VALUES ('$image', '$dishName', '$dishPrice', '$dishScription')";

       if(mysqli_query($connect, $sql) == true){
        echo "New record created<br>
        <a href='challenge_index.php'>Home</a>";
   }

   }
   ?> 
<!DOCTYPE html>
<html>
   <head>
       <title>Create</title>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
       <link rel="stylesheet" href="style.css">
    </head>
   <body>
       <h5>Insert new data</h5>
       <form method="post">
           <input type="text" name="image" placeholder="image url"><br><br>
           <input type="text" name="dishName" placeholder="dish name"><br><br>
           <input type="text" name="dishPrice" placeholder="dish price"><br><br>
           <input type="text" name="dishScription" placeholder="dish description"><br><br>
           <input type="submit" name="submit" value="submit"><br>
       </form>
   </body>
</html>