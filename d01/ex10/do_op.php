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

if ($argc != 4)
	exit("Incorrect Parameters\n");

$argv[1] = trim($argv[1]);
$op = trim($argv[2]);
$argv[3] = trim($argv[3]);

switch ($op[0])
{
	case '+':
		printf("%d\n", $argv[1] + $argv[3]);
		break ;
	case '-':
		printf("%d\n", $argv[1] - $argv[3]);
		break ;
	case '*':
		printf("%d\n", $argv[1] * $argv[3]);
		break ;
	case '/':
		if ($argv[3] == 0)
			exit("You cannot divide by zero!\n");
		printf("%d\n", $argv[1] / $argv[3]);
		break ;
	case '%':
		printf("%d\n", $argv[1] % $argv[3]);
		break ;
}
?>