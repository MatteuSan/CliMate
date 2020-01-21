<?php
    include("sys/dbh.sys.php");
    
    session_start();

    $sessionID = $_SESSION['client_id'];
    $sessionName = $_SESSION['client_uname'];   
        
    if(!isset($_SESSION['client_uname'])) {
        header("Location: ./?ambush=fail");
        exit();
    }
?>

