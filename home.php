<?php
    include("assets/session_start.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home | CliMate</title>
<meta property="og:description" content="CliMate; helping the world one box at a time." />
<meta name="description" content="CliMate; helping the world one box at a time."/>

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
            if(isset($_GET['login'])) {
                if ($_GET['login'] == "success") {
                    echo('<h4 class="welcome mdc-elevation--z1" id="welc_mes">Welcome back '.$sessionName.'!</h4>');
                }
            }
        ?>
        <div class="kitWrap">
            <h2 class="titleBar mdc-elevation--z1">CliMate Kits</h2>
        
            <div class="kitBlock mdc-elevation--z1">
                <img class="blockImg" alt="EarthKit_sample" src="img/EarthKit.png">
                <hr>
                <h2 class="blockTitle">EarthKit</h2>
                <h4 class="price">$5.99</h4>
                <p class="kitDesc">The perfect starter kit for you! It comes with 5 seeds, 5 seed beds for your tree to grow on, and a mini prowler. It also comes with FUN tasks that you and wour whole family will surely love! Not only that you also get to help the environment while you have FUN!</p>
                <a href="buy.php?item=EarthKit">
                    <button type="submit" class="w-100 mdc-elevation--z2">BUY NOW!</button>
                </a>
            </div>
            <h2 class="titleBar mdc-elevation--z1">CliMate NEWS</h2>
            <a class="twitter-timeline mdc-elevation--z1" data-height="400" data-theme="light" href="https://twitter.com/Clim8Team?ref_src=twsrc%5Etfw">Tweets by Clim8Team</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
        <div class="mainContent">
            <h2 class="titleBar mdc-elevation--z1">About Us</h2>
            <img class="blockImg mdc-elevation--z1" alt="cliMate Team" src="img/the_team.jpg" style="border-radius: 5px; margin-bottom: 7px;">
            <div class="blockDesc mdc-elevation--z1">
                <p class="kitDesc">
                     The CliMate web app (together with it's team) is a tool that helps make a dent in climate change and ultimately prevent it, one box at a time.
                </p>
            </div><br>
            <div class="shop">
                <h2 class="titleBar mdc-elevation--z1">CliMate Shop</h2>
                <div class="blockDesc mdc-elevation--z1">
                    <p class="kitDesc">
                         The CliMate shop offers products that are very eco friendly and stuff... blah blah blah, not to self: update the description kthxbye.
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <?php
        include("assets/footer_nav.php");
    ?>
</body>
</html>