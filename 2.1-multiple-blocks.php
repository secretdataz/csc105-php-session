<?php
    $a = $_GET['num1'];
    $b = $_GET['num2'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP in HTML file - Multiple blocks</title>
        <meta charset='utf-8'/>
    </head>
    <!-- In web browser, use <br> instead of new line to break lines -->
    <body>
        <h1>Variables</h1>
        $a = <?php echo $a; ?> <br>
        $b = <?php echo $b; ?> <br>
        $a+$b = <?php echo ($a+$b); ?> <br>
    </body>
</html>

