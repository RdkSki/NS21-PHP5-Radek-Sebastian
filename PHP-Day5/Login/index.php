<?php
require_once 'components/db_connect.php';
session_start();

$tbody = ''; 
$sqlProd = "SELECT * FROM products";
$resultProd = mysqli_query($connect ,$sqlProd);

if(mysqli_num_rows($resultProd)  > 0) {     
    while($row = mysqli_fetch_array($resultProd, MYSQLI_ASSOC)){         
        $tbody .= "<tr>
            <td><img class='img-thumbnail' src='../Restaurant/pictures/" .$row['picture']."'</td>
            <td>" .$row['name']."</td>
            <td>" .$row['description']."</td>
            <td>" .$row['price']."</td>";
    };
} else {
    $tbody =  "<tr><td colspan='5'><center>No Data Available </center></td></tr>";
}


mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP CRUD</title>
        <?php require_once 'components/boot.php'?>
        <style type="text/css">
            .manageProduct {           
                margin: auto;
            }
            .img-thumbnail {
                width: 70px !important;
                height: 70px !important;
            }
            td {          
                text-align: center;
                vertical-align: middle;
            }
            tr {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="container">
        <div class="manageProduct mt-3">    
            <div class='mb-3'>
                <a href= "register.php"><button class='btn btn-dark'type="button">Sign-up</button></a>
                <a href= "login.php"><button class='btn btn-dark'type="button" >Login</button></a>
            </div>
            <p class='h2'>Products</p>
            <table class='table table-striped'>
                <thead class='table-success'>
                    <tr>
                        <th>Picture</th>
                        <th>Name</th>
                        <th>description</th>
                        <th>price</th>
                    </tr>
                </thead>
                <tbody>
                    <?= $tbody;?>
                </tbody>
            </table>
        </div>
        </div>
    </body>
</html>