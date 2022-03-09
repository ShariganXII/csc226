<!DOCTYPE html>
<html>
    <body>
        <?php
            $name = "Junjie Du";
            $credit = 11;
            var_dump($name);
            echo "<br>";
            var_dump($credit);
            echo "<br>";
            echo "Welcome ", $name;
            if($credit >= 12)
                echo "Full Time Student";
            else
                echo "Part Time Student";
            echo $_SERVER['PHP_SELF'];
            echo "<br>";
            echo $_SERVER['SERVER_NAME'];
            echo "<br>";
            echo $_SERVER['HTTP_HOST'];
            echo "<br>";
            echo $_SERVER['HTTP_REFERER'];
            echo "<br>";
            echo $_SERVER['HTTP_USER_AGENT'];
            echo "<br>";
        ?>
    </body>
</html>


