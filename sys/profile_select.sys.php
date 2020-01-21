<?php

include("dbh.sys.php");
$client_ID = $_SESSION['client_id'];

$sql = "SELECT uname, email, pos, img FROM users WHERE idusers=?";
if(!$stmt = $conn->prepare($sql)){
    header("Location: ../my-climate.php?sql=error");
    exit();
} else {
    $stmt->bind_param("i", $client_ID);
    $stmt->execute();
    $stmt->store_result();
    $num = $stmt->num_rows();
    
    if($num > 0) {
        $stmt->bind_result($uname, $email, $pos, $img);
        while ($stmt->fetch()) {
            $user = $uname;
            $u_email = $email;
            $imgLink = $img;
            
            if($pos == "admin"){$position = "Administrator";}
            if($pos == "mod"){$position = "Moderator";}
            if($pos == "mem"){$position = "Member";}
        }
    } else {
        header("Location: ../my-climate.php?selection=error");
        exit();
    }
}