<?php
session_start();
require_once 'challenge_connect.php';
require_once '../loginUser/components/boot.php';
$sql = "SELECT * FROM dishes";
//$sql2 = "SELECT description FROM details";
$result = mysqli_query($connect, $sql);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
$res = mysqli_query($connect, "SELECT * FROM user WHERE id=" . $_SESSION['user']);
$row = mysqli_fetch_array($res, MYSQLI_ASSOC);

mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - <?php echo $row['first_name']; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
.userImage{
width: 10%;
height: 10%;
padding-left: 2em;
}
.hero {
    background: rgb(2,0,36);
    background: linear-gradient(24deg, rgba(2,0,36,1) 0%, rgba(0,212,255,1) 100%);   
   
}
</style>
</head>

<body>
        <div class="container">
    <div class="hero mt-2">
    <h2 class="text-center text-warning pt-2">Ristorante Portofino</h2>
        <img class="userImage pb-2 img-thumbnail rounded-circle" src="../loginUser/pictures/<?php echo $row['picture']; ?>" alt="<?php echo $row['first_name']; ?>">
        <span class="text-white" >Hi <?php echo $row['first_name']; ?></span>
    </div>
    <span> * </span><a href="../loginUser/logout.php?logout=logout">Sign Out</a><span> * </span>
    <a href="../loginUser/update.php?id=<?php echo $_SESSION['user'] ?>">Update your profile</a>
</div>
    <div id="div" class="fs-3"><!--<a href="challenge_create.php" id="fff">Create new record</a><br>--></div><br><br>
    <?php
    foreach ($rows as $value) {
        echo "<div id='cards' class='fs-3'><p><img class='rounded' src='{$value['image']}' width='200'><br>" . $value['dishName'] . "<br>" . $value['dishPrice'] . " €<br> " . $value['dishscription'] . "
            <br></p><!--<a class='del' href='challenge_delete.php?id={$value['dishID']}'>delete</a>--></div><hr>";
    }
    // <a class='del' href='challenge_details.php?id='{$value['dishID']}'>details</a>
    ?>
      <footer class='text-center bg-dark text-light pt-2 fs-3 mt-2'>Radek Slowinski - 2021</footer>
</body>

</html>