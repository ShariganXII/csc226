<?php
$name = "Jun Jie Du";
$credit = 11;
$any_val = 5.5;
echo "Name: " ; var_dump($name);
echo "<br>";
echo "Credit: " ; var_dump($credit);
echo "<br>";
echo "Any variable for float: "; var_dump($any_val);
echo "<br>";
echo "Welcome ", $name; echo "<br>";

if($credit >= 12)
    echo "Full Time Student";
else
    echo "Part Time Student"; echo "<br>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
?>




