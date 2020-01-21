<?php
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
include("dbh.sys.php");
include("timescript.sys.php");
$user = $_SESSION['client_id'];
$sql = "SELECT * FROM incom_tasks WHERE taskUser=$user AND taskStat='i' ORDER BY taskID ASC;";
/*$stmt = $conn->stmt_init();
if(!$stmt = $conn->prepare($sql)) {
    echo '<p>SQL had an error!</p>';
} elseif($stmt = $conn->prepare($sql)) {
    //binder
    $stmt->bind_param("i", $user);
    //run!
    $stmt->execute();
    //get num rows
    $stmt->store_result();*/
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num > 0){
        while($row = mysqli_fetch_assoc($result)){
        
        $date = $row['taskDate'];
        $taskID = $row['taskID'];
        $sql = "SELECT * FROM tasks_list WHERE taskID=$taskID;";
        /*$stmt = $conn->stmt_init();
        if(!$stmt = $conn->prepare($sql)) {
            echo '<p>SQL had an error!</p>';
        } elseif($stmt = $conn->prepare($sql)){
            $stmt->bind_param("i", $taskID);
            $stmt->execute();
            $stmt->store_result();*/

            $result2 = mysqli_query($conn, $sql);
            
            while($row = mysqli_fetch_assoc($result2)) {
            
                $name = $row['taskTitle'];
                $desc = $row['taskDesc'];
                $points = $row['taskPoints'];
                $dateElap = time_elapsed_string($date);
                
                //POINTS SUFFIX
                if($points == 1) {$pointsSuffix = "point";} else if($points > 1) {$pointsSuffix = "points";}
                
                echo('<div class="taskBox mdc-elevation--z1"><form action="sys/task_done.sys.php" method="POST"><button class="material-icons taskCheck" title="Tick me if you\'re done!" name="check">check_box_outline_blank</button></form><h2 class="taskName">'.$name.'</h2><p class="taskPoints">'.$points.' '.$pointsSuffix.'</p><p class="taskDesc">'.$desc.'</p><p class="taskDate">'.$dateElap.'</p></div>');
               }    
            }
        //}
    } else {
        echo('<p class="taskBox mdc-elevation--z1">No tasks for now!</p>');
    }
//}