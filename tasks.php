<?php
    include("assets/session_start.php");
    //include("sys/loopers/task_archive.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tasks | CliMate</title>
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
            include("sys/tasks.sys.php");
       ?>     
    </div>
    <?php
        include("assets/footer_nav.php");
    ?>
    
    <script>
        $(document).ready(function(){
        
            $(document).on('click', '.taskCheck', function(){
                var task_list_id = $(this).data('id');
                $.ajax({
                    url:"sys/task_done.sys.php",
                    method:"POST",
                    data:{task_list_id:task_list_id},
                    success:function(data){
                        $('#list-group-item-'+task_list_id).css('text-decoration', 'line-through');
                    }
                })
            });
        
        });
    </script>
</body>
</html>