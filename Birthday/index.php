<?php
    $years = glob("years/*");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Birthday Card</title>
        <link href="index.css" rel="stylesheet" type="text/css" />
        <script src="main.js" type="text/javascript"></script>
    </head>

    <body>
        <div id="header" class="banner">
            <h1>Happy Birthday</h1>
        </div>
        <div id="years">
            <?php
                foreach($years as $year) {
                    ?>
                    <div class="listItem" value="<?= $year ?>">
                        <img src="<?= $year ?>/icon.jpg" alt="icon picture" />
                    </div>
                    <?php
                }
            ?>
        </div>
        <div id="footer" class="banner">
            <p>
                You're the best!
            </p>
        </div>
    </body
</html>
