#!/usr/bin/php
<?php

function ft_split($str)
{
	$res = array();
	$word = "";
	$x = -1;
	for ($i = 0; $i < strlen($str); $i++)
	{
		$word[++$x] = $str[$i];
		if ((!$str[$i + 1] && $str[$i + 1] != '0') || ctype_space($str[$i + 1]))
		{
			$res[] = $word;
			$word = "";
			$x = -1;
			while (ctype_space($str[$i + 1]))
			$i++;
		}
	}
	return $res;
}

$arr = array();
$x = -1;
for ($i = 1; $argv[$i]; $i++)
{
    $words = ft_split($argv[$i]);
    for ($j = 0; $words[$j]; ++$j)
        $arr[++$x] = $words[$j];
}
sort($arr);
for ($i = 0; $arr[$i]; ++$i)
	print $arr[$i] . "\n";
?>