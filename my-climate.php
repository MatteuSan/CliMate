<?php
    include("assets/session_start.php");
    include("sys/profile_select.sys.php");
    $name = $_SESSION['client_uname'];
    $id = $_SESSION['client_id'];
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $name ?>'s MyCliMate Profile | CliMate</title>
<script type="text/javascript" src="https://material-components.github.io/material-components-web-catalog/static/js/main.a88a1f88.js"></script>

<?php
    include("assets/asset_load.php");
?>
    
</head>
<body>
    <?php
        include("assets/header.php");
    ?>
    
    <div class="contentWrap">
        <div class="infoWrap">
            <div class="kitBlock">
                <h2 class="blockTitle">Name: <?php echo $name ?></h2>
                <p class="kitDesc"><b>User ID:</b> <?php echo $id ?></p>
                <p class="kitDesc"><b>Status:</b> <?php echo $position?></p>
            </div>
        </div>
    </div>
    
    <?php
        include("assets/footer_nav.php");
    ?>
</body>
</html>