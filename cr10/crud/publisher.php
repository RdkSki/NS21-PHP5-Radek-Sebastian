<?php
require_once 'actions/db_connect.php';
    $sql = "SELECT * FROM library";
    // $sql2 = "SELECT * FROM library WHERE 'publisher_name' == $publisher_name..";
        $result = mysqli_query($connect, $sql);
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
       
//     } else {
//         header("location: error.php");
//     }
//     mysqli_close($connect);
// } else {
//     header("location: error.php");
// }
$pbody='';
   
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){         
        $pbody .= "<tr id='trow'>
            <td>" .$row['publisher_name']."</td>
            <td>" .$row['publisher_address']."</td>
            <td><a href='pubdetails.php?publisher_name={$row['publisher_name']}'><button class='btn bg-dark text-light btn-sm' type='button'>Show media</button></a></td>
            </tr>";
    };
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Publisher list</title>
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
    <div class="manageProduct w-75 mt-3" id="index">    
            <div class='mb-3 text-center'>
    <p class='h1 text-center text-light'>Publisher list</p>
            <table class='table'>
                <thead class='table bg-dark rounded'>
                    <tr class='rounded' width='80%'>
                        <th>Publisher</th>
                        <th>Address</th>
                        <th>Media</th>
                    </tr>
                </thead>
                <tbody>
                    <?= $pbody;?>
                </tbody>
            </table>
        </div>
                    <tr><td><a href= "index.php"><button class="btn bg-dark text-light" type="button">Back</button></a></td>
                    <hr></tr>
                </table>
        </div>
      <footer class='text-center bg-dark text-light pt-2 fs-3 mt-2'>Radek Slowinski - 2021</footer>
    </body>
</html>