<?php
session_start();
require_once 'components/db_connect.php';

// if adm will redirect to dashboard
if (isset($_SESSION['adm'])) {
    header("Location: dashboard.php");
    exit;
}
// if session is not set this will redirect to login page
if (!isset($_SESSION['adm']) && !isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}

// select logged-in users details - procedural style
$res = mysqli_query($connect, "SELECT * FROM user WHERE id=" . $_SESSION['user']);
$rowUser = mysqli_fetch_array($res, MYSQLI_ASSOC);


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
<title>Welcome - <?php echo $rowUser['first_name']; ?></title>
<?php require_once 'components/boot.php'?>
<style>
    .userImage{
    width: 50px;
    height: 50px;
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
       
</style>
</head>
<body>
<div class="container">
    <div class="hero">
        <img class="userImage" src="pictures/<?php echo $rowUser['picture']; ?>" alt="<?php echo $row['first_name']; ?>">
        <p class="text-dark" >Hi <?php echo $rowUser['first_name']; ?></p>
    </div>
    <div class="manageProduct mt-3">    
            <div class='mb-3'>
                <a href="logout.php?logout"><button class='btn btn-dark'type="button">Sign-out</button></a>
                <a href="update.php?id=<?php echo $_SESSION['user'] ?>"><button class='btn btn-dark'type="button">Edit Profile</button></a>
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
        </div

</div>
</body>
</html>