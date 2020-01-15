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
for ($i = 1; isset($argv[$i]); $i++)
{
	$words = ft_split($argv[$i]);
    for ($j = 0; isset($words[$j]); ++$j)
		$arr[++$x] = $words[$j];
}
$given_key = $arr[0];
for ($i = 1; $arr[$i]; $i++)
{
	if (strstr($arr[$i], $given_key))
		$res = substr(strchr($arr[$i], ":"), 1);
}

if ($res)
	printf("%s\n", $res);

?>