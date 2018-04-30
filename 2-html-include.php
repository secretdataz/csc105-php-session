<!DOCTYPE html>
<html>
    <head>
        <title>PHP in HTML file</title>
        <meta charset='utf-8'/>
    </head>
    <body>
        <p>
            To include php code, add an opening tag so it won't be sent to the browser
            and get parsed server side instead.
         </p>
         echo "Hello World"; <br>
         ^^ will not be processed by php interpreter <br>
        <?php
            echo "<p>I'm from php, no echo to be found!</p>";
        ?>
        <p>
            You can also have multiple blocks of php code in one file.
            It can be useful for separating variables declaration and logic.
            See 2.1-multiple-blocks for example.
        </p>
    </body>
</html>