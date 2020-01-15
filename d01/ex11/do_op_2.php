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

function validate_expr($expr_arr)
{
	if (!ctype_digit($expr_arr[0]) || !ctype_digit($expr_arr[0]))
		exit("Syntax error\n");
}

if ($argc != 2)
	exit("Incorrect Parameters\n");

$expr_arr = ft_split(trim($argv[1]));
validate_expr($expr_arr);
print_r($expr_arr);
switch ($expr_arr[1][0])
{
	case '+':
		printf("%d\n", $expr_arr[0] + $expr_arr[2]);
		break ;
	case '-':
		printf("%d\n", $expr_arr[0] - $expr_arr[2]);
		break ;
	case '*':
		printf("%d\n", $expr_arr[0] * $expr_arr[2]);
		break ;
	case '/':
		if ($expr_arr[2] == 0)
			exit("You cannot divide by zero!\n");
		printf("%d\n", $expr_arr[0] / $expr_arr[2]);
		break ;
	case '%':
		printf("%d\n", $expr_arr[0] % $expr_arr[2]);
		break ;
	default:
		exit("Syntax error\n");
		break ;
	}
?>