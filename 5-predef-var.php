<!DOCTYPE html>
<html>
    <head>
        <title>Predefined Variables</title>
        <meta charset='utf-8'>
    </head>
    <body>
        <a href="http://php.net/manual/en/reserved.variables.php">See more</a><br>
        <?php
            if(sizeof($_GET) > 0) {
                echo "Received \$_GET variables are<br>";
                ?>
                <ul>
                <?php
                foreach($_GET as $key => $value) {
                    echo "<li>\$_GET['$key'] = $value</li>";
                }
            }
        ?>
                </ul>
        <?php
            if(sizeof($_POST) > 0) {
                echo "Received \$_POST variables are<br>";
                ?>
                <ul>
                <?php
                foreach($_POST as $key => $value) {
                    echo "<li>\$_POST['$key'] = $value</li>";
                }
            }
        ?>
                </ul>
                <form method="POST" action="5-predef-var.php">
                    <label>This will send a POST request with the input's name as the key</label><br>
                    <label>input1</label>
                    <input type="text" id="thisisid1" name="input1"/><br>
                    <label>input2</label>
                    <input type="text" id="thisisid2" name="input2"/>
                    <input type="submit"/>                
                </form>
    </body>
</html>