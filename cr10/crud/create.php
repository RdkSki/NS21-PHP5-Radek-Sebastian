<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php require_once 'components/boot.php'?>
        <title>PHP CRUD  |  Add media</title>
        <style>
            fieldset {
                margin: auto;
                margin-top: 100px;
                width: 60% ;
            }       
        </style>
    </head>
    <body>
        <fieldset>
            <legend class='h2'>Add media</legend>
            <form action="actions/a_create.php" method= "post" enctype="multipart/form-data">
                <table class='table'>
                <tr>
                        <th>Title</th>
                        <td><input class="form-control" type="text"  name="title" placeholder ="Media title" /></td>
                    </tr>
                    <tr>
                        <th>Image</th>
                        <td><input class="form-control" type="file" name= "image" /></td>
                    </tr>
                    <tr>
                        <th>ISBN code</th>
                        <td><input class="form-control" type= "text" name="ISBN_code" step="any"  placeholder="ISBN" /></td>
                    </tr>
                    <tr>
                        <th>Short description</th>
                        <td><input class="form-control" type= "text" name="short_description" step="any"  placeholder="Short description"/></td>
                    </tr>
                    <tr>
                        <th>Type</th>
                        <td><input class="form-control" type= "text" name="type" step="any"  placeholder="Type" /></td>
                    </tr>
                    <tr>
                        <th>Author's first name</th>
                        <td><input class="form-control" type= "text" name="author_first_name" step="any"  placeholder="Authors first name"/></td>
                    </tr>
                    <tr>
                        <th>Author's last name</th>
                        <td><input class="form-control" type= "text" name="author_last_name" step="any"  placeholder="Authors last name"/></td>
                    </tr>
                    <tr>
                        <th>Publisher's name</th>
                        <td><input class="form-control" type= "text" name="publisher_name" step="any"  placeholder="Publishers name"/></td>
                    </tr>
                    <tr>
                        <th>Publisher's address</th>
                        <td><input class="form-control" type= "text" name="pubisher_address" step="any"  placeholder="Publishers address"/></td>
                    </tr>
                    <tr>
                        <th>Publish date</th>
                        <td><input class="form-control" type= "text" name="publish_date" step="any"  placeholder="Publish date"/></td>
                    </tr>
                    <tr>
                        <th>Current status</th>
                        <td><input class="form-control" type= "text" name="current_status" step="any"  placeholder="Current status" /></td>
                    </tr>
                    <tr>
                        <th>Language</th>
                        <td><input class="form-control" type= "text" name="language" step="any"  placeholder="Language"/></td>
                    </tr>
                    <tr>
                        <td><button class='btn btn-success' type="submit">Insert media</button></td>
                        <td><a href="index.php"><button class='btn bg-dark text-light' type="button">Home</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>
        <footer class='text-center bg-dark text-light pt-2 fs-3 mt-2'>Radek Slowinski - 2021</footer>
    </body>
</html>