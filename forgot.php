<?php

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Forgot password | CliMate</title>
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

</head>

<body>
    
    <div class="contentWrap">
        <div class="loginCont">
            <center>
                <div id="loginImg">
                    <img alt="CliMate_icon" src="img/favicon.png">
                </div>
                <h2>Forgot Password?</h2>
            </center>
            <form id="forgotForm" action="sys/forgot.sys.php" method="post">
                <input type="email" placeholder="E-mail" autofocus required>
                <button type="submit" name="confirm">SEND E-MAIL</button>
            </form>
            <br>
            <a href="javascript:history.go(-1)">Changed your mind? Go back!</a>
        </div>
    </div>    

</body>
</html>