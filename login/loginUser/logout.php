<?php


session_start();
if (!isset($_SESSION['adm']) && !isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
} 
// echo $_SESSION['user'] . " or  " . $_SESSION['adm'];


if(isset($_GET['logout'])) {
    unset($_SESSION['user' ]);
    unset($_SESSION['adm' ]);
    session_unset();
    session_destroy();
    header("Location: ../challenge/challenge_index.php");
    exit;
}
else{
    if(isset($_SESSION['user'])!="") {
    header("Location: home.php");
    }else{
    header("Location: dashBoard.php");    
    }
}