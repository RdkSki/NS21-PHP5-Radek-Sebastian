<?php
require_once 'db_connect.php';
require_once 'file_upload.php';

//var_dump($_POST);

if ($_POST) {   
    $title = $_POST['title'];
    // $image = $_POST['image'];
    $ISBN_code = $_POST['ISBN_code'];
    $short_description = $_POST['short_description'];
    $type = $_POST['type'];
    $author_first_name = $_POST['author_first_name'];
    $author_last_name = $_POST['author_last_name'];
    $publisher_name = $_POST['publisher_name'];
    $publisher_address = $_POST['pubisher_address'];
    $publish_date = $_POST['publish_date'];
    $current_status = $_POST['current_status'];
    $language = $_POST['language'];
    $uploadError = '';
    //this function exists in the service file upload.
    $image = file_upload($_FILES['image']);  
   
    $sql = "INSERT INTO library  VALUES ('','$title', '$image->fileName', '$ISBN_code', '$short_description', '$type', '$author_first_name', '$author_last_name', '$publisher_name', '$publisher_address', '$publish_date', '$current_status', '$language' )";

    if (mysqli_query($connect, $sql) === true) {
        $class = "success";
        $message = "The entry below was successfully created <br>
            <table class='table w-50'><tr class='text-dark'>
            <td> $title </td>
            <td> $ISBN_code </td>
            <td> $short_description </td>
            <td> $type </td>
            <td> $author_first_name </td>
            <td> $author_last_name </td>
            <td> $publisher_name </td>
            <td> $publisher_address </td>
            <td> $publish_date </td>
            <td> $current_status </td>
            <td> $language </td>
            </tr></table><hr>";
        $uploadError = ($image->error !=0)? $image->ErrorMessage :'';
    } else {
        $class = "danger";
        $message = "Error while creating record. Try again: <br>" . $connect->error;
        $uploadError = ($image->error !=0)? $image->ErrorMessage :'';
    }
    mysqli_close($connect);
} else {
    header("location: ../error.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Update</title>
        <?php require_once '../components/boot.php'?>
    </head>
    <body>
        <div class="container">
            <div class="mt-3 mb-3">
                <h1>Create request response</h1>
            </div>
            <div class="alert alert-<?=$class;?>" role="alert">
                <p class='text-dark'><?php echo ($message) ?? ''; ?></p>
                <p class='text-dark'><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../index.php'><button class="btn bg-dark text-light" type='button'>Home</button></a>
            </div>
        </div>
    </body>
</html>