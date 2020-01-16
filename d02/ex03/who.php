#!/usr/bin/php
<?php

	$fd = fopen("/var/run/utmpx", 'r');
	date_default_timezone_set("Europe/Kiev");
	
	while ($str = fread($fd, 628))
	{
		$res = unpack("a256user/a4id/a32line/ipid/itype/Itime", $str);

		if ($res[type] == 7 && strncmp("utmpx-1.00", $res['user'], 10) != 0)
		{
			printf("%s  ", $res[user]);
			printf("%s  ", $res[line]);
			echo date("M j H:i", $res[time]) . "\n";
		}
	}
?>