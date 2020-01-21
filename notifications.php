<?php
    include("assets/session_start.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Notifications | CliMate</title>
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
       <?php
            include("sys/notif.sys.php");
       ?>     
    </div>
    <script>
        import {MDCIconButtonToggle} from '@material/icon-button';
        const iconToggle = new MDCIconButtonToggle(document.querySelector('.mdc-icon-button'));
    </script>
    <?php
        include("assets/footer_nav.php");
    ?>
    
    <script type="text/javascript">
        $('.taskCheck').click(function() {
            $("button", this).textContent("check_box");
        });
    </script>
</body>
</html>