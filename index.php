<?php
    $var1 = 1;
    $var2 = $var1 + 3;
    echo "Hello world";
    var_dump($var2);
    echo $var2;
    $str = "<h1>Hello World!</h1>";
    $newstr = filter_var($str, FILTER_SANITIZE_STRING);
    echo $newstr;

    $int = '0i';
    if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
    echo("Integer is valid");
    } else {
    echo("Integer is not valid");
    }

?>
