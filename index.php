<?php

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Log In | CliMate</title>
<!-- CSS -->
<link rel="stylesheet" type="text/css" href="CSS/login.css">
    
<!-- LIBS -->
<link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
<script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
<!-- FAVICON -->
<link rel="apple-touch-icon" sizes="180x180" href="img/favicon.png">
<link rel="icon" type="img/png" sizes="32x32" href="img/favicon.png">
<link rel="icon" type="img/png" sizes="16x16" href="img/favicon.png">

<!-- VIEWPORTS -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!-- OG -->
<meta property="og:description" content="Login to your CliMate account; commited to helping the world one box at a time."/>
<meta property="og:image" content="img/facebooklink.png"/>  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>

<body>
    
    <div class="contentWrap">
        <div class="loginCont mdc-elevation--z3">
            <center>
                <div id="loginImg">
                    <img alt="CliMate_icon" src="img/favicon.png" class="mdc-elevation--z4">
                </div>
                <h2>Log In</h2>
            </center>
            <p class="error">
                <?php
                    if (isset($_GET['error'])) {
                        if ($_GET['error'] == 'pass') {
                            echo("Password is incorrect!");
                        } else if ($_GET['error'] == 'user') {
                            echo("User does not exist!");
                        } else if ($_GET['error'] == 'sql') {
                            echo("Database error. Unable to process data.");
                        } else if ($_GET['error'] == 'access') {
                            echo("The system forbids thee access to use the service.");
                        }
                    }
                    if(isset($_GET['logout'])) {
                        if($_GET['logout'] == "success") {
                            echo("Successfully logged out.");
                        }
                    }
                    if(isset($_GET['ambush'])) {
                        if($_GET['ambush'] == "fail") {
                            echo("Don't even try to do that...<br>it's practically useless...<br>just make an account if you don't have one ;)");
                        }
                    }
                ?>
            </p>
            <form id="loginForm" action="sys/login.sys.php" method="post">
                <input type="text" name="uname" placeholder="Username/E-mail" autofocus required>
                <input type="password" name="pass" placeholder="Password" required>
                <button type="submit" name="login" class="mdc-elevation--z3">LOG IN</button>
            </form>
            <br>
            <a href="forgot.php">Forgot password?</a><br>
            <a href="signup.php">Don't have an account? Sign-up</a>
        </div>
    </div>    

</body>
</html>