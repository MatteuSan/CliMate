<?php
if (isset($_POST['signup'])) {

    require("dbh.sys.php");
    
    $username = $_POST['uname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $pass_rep = $_POST['pass-rep'];
    
    if ($pass !== $pass_rep) {
        header("Location: ../signup.php?error=passmatchfail");
    } else {
        
        $sql = "SELECT uname FROM users WHERE uname=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../signup.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resCheck = mysqli_stmt_num_rows($stmt);
            if ($resCheck > 0) {
                header("Location: ../signup.php?error=usertaken");
                exit();
            } else {
                $sql = "INSERT INTO users (uname, email, pwd, pos) VALUES (?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../signup.php?error=sqlerror");
                    exit();
                } else {
                    $hpass = password_hash($pass, PASSWORD_DEFAULT);
                    $pos = "mem";
                    mysqli_stmt_bind_param($stmt, "ssss", $username, $email, $hpass, $pos);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../?signup=success");
                    exit();
                }
            }
        } 
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}

else {
    header("Location: ../signup.php");
    exit();
}