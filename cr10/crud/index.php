<?php 
require_once 'actions/db_connect.php';
$sql = "SELECT * FROM library";
$result = mysqli_query($connect ,$sql);
$tbody=''; //this variable will hold the body for the table
if(mysqli_num_rows($result)  > 0) {     
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){         
        $tbody .= "<tr id='trow'>
            <td><img class='img-thumbnail' src='pictures/" .$row['image']."'></td>
            <td>" .$row['title']."</td>
            <td>" .$row['author_last_name']."</td>
            <td><a href='details.php?id=" .$row['id' ]."'><button class='btn bg-dark text-light btn-sm' type='button'>Show media</button></a>
            <a href='update.php?id=" .$row['id']."'><button class='btn bg-dark text-light btn-sm' type='button'>Edit</button></a>
            <a href='delete.php?id=" .$row['id']."'><button class='btn btn-danger btn-sm' type='button'>Delete</button></a></td>
            </tr>";
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
        <title>CR10 Library</title>
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
                text-align: left;
                vertical-align: middle;
            }
            tr {
                text-align: left;
                color: lightgray;
            }
            body{
            background-color: darkolivegreen;
            
            }
            tr:hover{
                background-color: lightgray;
                color: olive;

            }
        
        </style>
    </head>
    <body>
        <div class="manageProduct w-75 mt-3" id="index">    
            <div class='mb-3 text-center'>
            <a href= "publisher.php"><button class='btn bg-dark text-light'type="button" >Publisher list</button></a>
                <a href= "create.php"><button class='btn bg-dark text-light'type="button" >Add media</button></a>
            </div>
            <p class='h1 text-center text-light'>Media</p>
            <table class='table rounded'>
                <thead class='table bg-dark rounded'>
                    <tr class='rounded'>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?= $tbody;?>
                </tbody>
            </table>
        </div>
        <footer class='text-center bg-dark text-light pt-2 fs-3 mt-2'>Radek Slowinski - 2021</footer>
    </body>
</html>