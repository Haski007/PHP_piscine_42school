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

function    cmp($word1, $word2)
{
    $word1 = strtolower($word1);
    $word2 = strtolower($word2);
    if ($word1 == $word2)
        return (FALSE);
    for ($i = 0; $word1[$i] && $word2[$i] && $word1[$i] == $word2[$i]; $i++);
    if ($word1[$i] && !$word2[$i])
        return (TRUE);
    if (!$word1[$i] && $word2[$i])
        return (FALSE);
	$word2 = $word2[$i];
	$word1 = $word1[$i];
    if ((ctype_alpha($word1) && !ctype_alpha($word2) || (ctype_digit($word1) && !ctype_alnum($word2))))
        return (FALSE);
    if ((!ctype_alpha($word1) && ctype_alpha($word2) || (!ctype_alnum($word1) && ctype_digit($word2))))
        return (TRUE);
    return ($word1 > $word2 ? TRUE : FALSE);
}

$arr = array();
$x = -1;
for ($i = 1; $argv[$i]; $i++)
{
    $words = ft_split($argv[$i]);
    for ($j = 0; $words[$j]; ++$j)
        $arr[++$x] = $words[$j];
}

for ($i = 0; $arr[$i + 1]; $i++)
{
	if (cmp($arr[$i], $arr[$i + 1]))
	{
		$tmp = $arr[$i];
		$arr[$i] = $arr[$i + 1];
		$arr[$i + 1] = $tmp;
		$i = -1;
	}
}

foreach ($arr as $value)
	printf("%s\n", $value);

?>