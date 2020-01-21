<?php
    include("assets/session_start.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Enter code | CliMate</title>

<?php
    include("assets/asset_load.php");
?>
    
</head>

<body>
    <?php
        include("assets/header.php");
    ?>
    
    <div class="contentWrap">
        <div class="uploadWrap">
        
            <h2 class="titleBar mdc-elevation--z1">Enter the box code</h2>
            <p class="blockDesc mdc-elevation--z1">&ensp;Letting us know the box code allows us to generate the tasks for you to get rewards. Please enter a valid code that you got from the box and we'll get right into it ;)</p>
            <br>
            <?php
                if(isset($_GET['code'])) {
                    if ($_GET['code'] == "valid") {
                        echo('<h4 class="welcome mdc-elevation--z1" id="welc_mes">Code is VALID! You can now check your tasks.</h4>');
                    } else if ($_GET['code'] == "invalid") {
                        echo('<h4 class="welcome mdc-elevation--z1" id="welc_mes" style="background-color: red!important;">Code is INVALID! Please enter the correct code.</h4>');
                    }
                }
                if(isset($_GET['sql'])) {
                    if ($_GET['sql'] == "error") {
                        echo('<h4 class="welcome mdc-elevation--z1" id="welc_mes" style="background-color: red!important;">SQL Error! Error contacting the servers!</h4>');
                    }
                }
                if(isset($_GET['data'])) {
                    if ($_GET['data'] == "error") {
                        echo('<h4 class="welcome mdc-elevation--z1" id="welc_mes" style="background-color: red!important;">Error inserting data! Please contact support for this situation.</h4>');
                    }
                }
            ?>
            <div class="formBox mdc-elevation--z1">
                <form action="sys/code.sys.php" method="post">
                    <input type="text" name="code" placeholder="Enter the code here..." required autofocus>
                    <button type="submit" name="submit" class="genButton mdc-elevation--z4">Submit</button>
                </form>                
            </div>
        </div>
    </div>
    
    <?php
        include("assets/footer_nav.php");
    ?>
</body>
</html>