#!/usr/bin/php
<?php

$str = trim($argv[1]);

$res = "";
$x = -1;
for ($i = 0; $i < strlen($str); $i++)
{
    if (ctype_space($str[$i]))
    {
        $res[++$x] = ' ';
        while (ctype_space($str[$i + 1]))
            $i++;
    }
    else
            $res[++$x] = $str[$i];
}
if (ctype_print($str[0]))
    printf("%s\n", $res);

?>