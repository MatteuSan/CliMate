<?php
if (isset($_POST['login'])) {

    require("dbh.sys.php");
    
    $user = $_POST['uname'];
    $pass = $_POST['pass'];
    
    $sql = "SELECT * FROM users WHERE uname=?;";
    $stmt = $conn->stmt_init();
    if (!$stmt = $conn->prepare($sql)) {
        header("Location: ../?error=access");
        exit();
    } else {
        $stmt->bind_param("s", $user);
        $stmt->execute();
        
        $result = $stmt->get_result();
        
        if ($row = mysqli_fetch_assoc($result)) {
            $passCheck = password_verify($pass, $row['pwd']);
            if ($passCheck == false) {
                header("Location: ../?error=pass");
                exit(); 
            } elseif ($passCheck == true) {
                session_start();
                $_SESSION['client_id'] = $row['idusers'];
                $_SESSION['client_uname'] = $row['uname'];
                
                header("Location: ../home.php?login=success");
                exit();
            } else {
                header("Location: ../?error=pass");
                exit(); 
            }
        } else {
           header("Location: ../?error=user");
           exit(); 
        }
    }
    
} else {
    header("Location: ../?error=sql");
    exit();
}