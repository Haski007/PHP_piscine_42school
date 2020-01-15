#!/usr/bin/php
<?php

function epur_str($str)
{
	$str = trim($str);

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
	return $res;
}

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

$arr = ft_split(epur_str($argv[1]));

for ($i = 1; $arr[$i]; $i++)
{
	printf("%s ", $arr[$i]);
}
printf("%s\n", $arr[0]);

?>