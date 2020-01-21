<?php

if(isset($_POST['submit'])) {
    //handle db
    require("dbh.sys.php");
    //values for $sql
    $code = $_POST['code'];

    $sql = "SELECT codeID, boxCode, boxType FROM box_codes WHERE boxCode=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $code);
    $stmt->execute();
    $stmt->store_result();
    
    $num = $stmt->num_rows();
    
    if($num > 0) {
        $stmt->bind_result($cID, $bCode, $bType);
        while($stmt->fetch()){
            session_start();
            $int1 = 1;
            $user = $_SESSION['client_id'];
            $stat = "i";
            $sql = "INSERT INTO incom_tasks (taskID, taskUser, taskType, taskStat) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssss", $int1, $user, $bType, $stat);
            $stmt->execute();
            //$affect = $stmt->affected_rows();
            if($stmt->affected_rows > 0) {
                $ins_id = $stmt->ins_id;
                $stmt->close();
                header("Location: ../upload.php?code=valid");
                exit();
            }
        }
        $stmt->close();
    } else {
        header("Location: ../upload.php?code=invalid");
        exit();
    }
    
}