#!/usr/bin/php
<?php

function DateFrenchToEnglish($str) {
    $english_months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
	$french_months = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
	
	for ($i = 0; $french_months[$i]; $i++)
		$str = str_replace($french_months[$i], strtolower($english_months[$i]), $str);
	return $str;
}

function IsDayOfWeekOut($str)
{
	$day = true;
	$french_days = array('lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche');
	for ($i = 0; $french_days[$i]; $i++)
	{
		if (strstr($str, $french_days[$i]))
			$day = false;
	}
	return $day;
}

if ($argc != 2)
	exit("Wrong number of arguments!\n");

date_default_timezone_set("europe/paris");

$str = strtolower($argv[1]);
for ($i = 0; !is_numeric($str[$i]); $i++);

$str = strchr($str, $str[$i]);
$str =  DateFrenchToEnglish($str);


$res = strtotime($str);

if (!$res || IsDayOfWeekOut(strtolower($argv[1])))
	exit("Wrong Format\n");
printf("%s\n", $res);
?>