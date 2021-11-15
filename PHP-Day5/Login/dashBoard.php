<?php
session_start();
require_once 'components/db_connect.php';
// if session is not set this will redirect to login page
if (!isset($_SESSION['adm']) && !isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}
//if session user exist it shouldn't access dashboard.php
if (isset($_SESSION["user"])) {
    header("Location: home.php");
    exit;
}

$id = $_SESSION['adm'];
$status = 'adm';
$sqlUser = "SELECT * FROM user WHERE status != '$status'";
$resultUser = mysqli_query($connect, $sqlUser);

$res = mysqli_query($connect, "SELECT * FROM user WHERE id=" . $_SESSION['adm']);
$rowAdm = mysqli_fetch_array($res, MYSQLI_ASSOC);

//this variable will hold the body for the table
$tbody = ''; 
$tbody2 = '';

if ($resultUser->num_rows > 0) {
    while ($rowUser = $resultUser->fetch_array(MYSQLI_ASSOC)) {
        $tbody .= "<tr>
        <td><img class='img-thumbnail rounded-circle' src='pictures/" . $rowUser['picture'] . "' alt=" . $rowUser['first_name'] . "></td>
        <td>" . $rowUser['first_name'] . " " . $rowUser['last_name'] . "</td>
        <td>" . $rowUser['date_of_birth'] . "</td>
        <td>" . $rowUser['email'] . "</td>
        <td><a href='update.php?id=" . $rowUser['id'] . "'><button class='btn btn-primary btn-sm' type='button'>Edit</button></a>
        <a href='delete.php?id=" . $rowUser['id'] . "'><button class='btn btn-danger btn-sm' type='button'>Delete</button></a></td>
     </tr>";
    }
} else {
    $tbody = "<tr><td colspan='5'><center>No Data Available </center></td></tr>";
}

$sqlProd = "SELECT * FROM products";
$resultProd = mysqli_query($connect ,$sqlProd);

if(mysqli_num_rows($resultProd)  > 0) {     
    while($rowProd = mysqli_fetch_array($resultProd, MYSQLI_ASSOC)){         
        $tbody2 .= "<tr>
            <td><img class='img-thumbnail' src='../Restaurant/pictures/" .$rowProd['picture']."'</td>
            <td>" .$rowProd['name']."</td>
            <td>" .$rowProd['description']."</td>
            <td>" .$rowProd['price']."</td>
            <td><a href='../restaurant/update.php?id=" .$rowProd['id']."'><button class='btn btn-primary btn-sm' type='button'>Edit</button></a>
            <a href='../restaurant/delete.php?id=" .$rowProd['id']."'><button class='btn btn-danger btn-sm' type='button'>Delete</button></a></td>
            </tr>";
    };
} else {
    $tbody2 =  "<tr><td colspan='5'><center>No Data Available </center></td></tr>";
}

mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adm-DashBoard</title>
    <?php require_once 'components/boot.php'?>
    <style type="text/css">        
        .img-thumbnail{
            width: 70px !important;
            height: 70px !important;
        }
        td
        {
            text-align: left;
            vertical-align: middle;
        }
        tr
        {
            text-align: center;
        }
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
        .userImage{
width: 100px;
height: auto;
}
    </style>
</head>
<body>
<div class="container">
<img class="userImage" src="pictures/admavatar.png" alt="Adm avatar">
        <p class="">Administrator | <?php echo $rowAdm['first_name']; ?> </p>
        <a href="logout.php?logout"><button class='btn btn-dark'type="button">Sign-out</button></a>
<div class="row">
      
        <div class="col-12 mt-2">
        <p class='h2'>Users</p>
        <table class='table table-striped'>
            <thead class='table-success'>
                <tr>
                    <th>Picture</th>
                    <th>Name</th>
                    <th>Date of birth</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?=$tbody?>
            </tbody>
        </table>
        </div>
    <div class="manageProduct mt-3">    
            <div class='mb-3'>
            <p class='h2'>Products</p>
            
                <a href= "../Restaurant/create.php"><button class='btn btn-primary'type="button" >Add product</button></a>
            </div>
            
            <table class='table table-striped'>
                <thead class='table-success'>
                    <tr>
                        <th>Picture</th>
                        <th>Name</th>
                        <th>description</th>
                        <th>price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?= $tbody2;?>
                </tbody>
            </table>
        </div>

</div>

</div>
</body>
</html>