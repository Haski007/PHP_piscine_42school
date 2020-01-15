#!/usr/bin/php
<?php


function ft_is_sort($arr)
{
	for ($i = 0; $arr[$i + 1]; $i++)
	{
		if ($arr[$i] > $arr[$i + 1])
			return false;
	}
	return true;
}

$tab = array("!/@#;^", "42", "Hello World", "hi", "zZzZzZz");
$tab[] = "What are we doing now ?";
if (ft_is_sort($tab))
	echo "The array is sorted\n";
else
	echo "The array is not sorted\n";
?>