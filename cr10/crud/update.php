<?php
require_once 'actions/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM library WHERE id = {$id}";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        $title = $data['title'];
        $image = $data['image'];
        $ISBN_code = $data['ISBN_code'];
        $short_description = $data['short_description'];
        $type = $data['type'];
        $author_first_name = $data['author_first_name'];
        $author_last_name = $data['author_last_name'];
        $publisher_name = $data['publisher_name'];
        $publisher_address = $data['publisher_address'];
        $publish_date = $data['publish_date'];
        $current_status = $data['current_status'];
        $language = $data['language'];
       
    } else {
        header("location: error.php");
    }
    mysqli_close($connect);
} else {
    header("location: error.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Edit Media</title>
        <?php require_once 'components/boot.php'?>
        <style type= "text/css">
            fieldset {
                margin: auto;
                margin-top: 100px;
                width: 60% ;
            }  
            .img-thumbnail{
                width: 70px !important;
                height: 70px !important;
            }     
        </style>
    </head>
    <body>
        <fieldset>
            <legend class='h2'>Update request <img class='img-thumbnail rounded-circle' src='pictures/<?php echo $image ?>' alt="<?php echo $title ?>"></legend>
            <form action="actions/a_update.php"  method="post" enctype="multipart/form-data">
                <table class="table">
                    <tr>
                        <th>Title</th>
                        <td><input class="form-control" type="text"  name="title" placeholder ="Media title" value="<?php echo $title ?>"  /></td>
                    </tr>
                    <tr>
                        <th>Image</th>
                        <td><input class="form-control" type="file" name= "image" /></td>
                    </tr>
                    <tr>
                        <th>ISBN code</th>
                        <td><input class="form-control" type= "text" name="ISBN_code" step="any"  placeholder="ISBN" value ="<?php echo $ISBN_code ?>" /></td>
                    </tr>
                    <tr>
                        <th>Short description</th>
                        <td><input class="form-control" type= "text" name="short_description" step="any"  placeholder="Short description" value ="<?php echo $short_description ?>" /></td>
                    </tr>
                    <tr>
                        <th>Type</th>
                        <td><input class="form-control" type= "text" name="type" step="any"  placeholder="Type" value ="<?php echo $type ?>" /></td>
                    </tr>
                    <tr>
                        <th>Author's first name</th>
                        <td><input class="form-control" type= "text" name="author_first_name" step="any"  placeholder="Authors first name" value ="<?php echo $author_first_name ?>" /></td>
                    </tr>
                    <tr>
                        <th>Author's last name</th>
                        <td><input class="form-control" type= "text" name="author_last_name" step="any"  placeholder="Authors last name" value ="<?php echo $author_last_name ?>" /></td>
                    </tr>
                    <tr>
                        <th>Publisher's name</th>
                        <td><input class="form-control" type= "text" name="publisher_name" step="any"  placeholder="Publishers name" value ="<?php echo $publisher_name ?>" /></td>
                    </tr>
                    <tr>
                        <th>Publisher's address</th>
                        <td><input class="form-control" type= "text" name="publisher_address" step="any"  placeholder="Publishers address" value ="<?php echo $publisher_address ?>" /></td>
                    </tr>
                    <tr>
                        <th>Publish date</th>
                        <td><input class="form-control" type= "text" name="publish_date" step="any"  placeholder="Publish date" value ="<?php echo $publish_date ?>" /></td>
                    </tr>
                    <tr>
                        <th>Current status</th>
                        <td><input class="form-control" type= "text" name="current_status" step="any"  placeholder="Current status" value ="<?php echo $current_status ?>" /></td>
                    </tr>
                    <tr>
                        <th>Language</th>
                        <td><input class="form-control" type= "text" name="language" step="any"  placeholder="Language" value ="<?php echo $language ?>" /></td>
                    </tr>
                    <tr>
                        <input type= "hidden" name= "id" value= "<?php echo $data['id'] ?>" />
                        <input type= "hidden" name= "image" value= "<?php echo $data['image'] ?>" />
                        <td><button class="btn btn-success" type= "submit">Save Changes</button></td>
                        <td><a href= "index.php"><button class="btn bg-dark text-light" type="button">Back</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>
        <footer class='text-center bg-dark text-light pt-2 fs-3 mt-2'>Radek Slowinski - 2021</footer>
    </body>
</html>