#!/usr/bin/php
<?php
	$handle = fopen('php://stdin', 'r');
	while ($handle)
    {
        print "Enter a number: ";
		$num = stream_get_line($handle, 3600, "\n");
		
        if (feof($handle)) 								// Проверка на CTRL+D
        {
            print "^D\n";
            exit();
		}

		if (!is_numeric($num))
			printf ("'%s' is not a number\n", $num);
		elseif ($num % 2 == 1)
			printf ("The number %d is odd\n", $num);
		else if ($num %2 == 0)
			printf ("The number %d is even\n", $num);
    }
	
?>
