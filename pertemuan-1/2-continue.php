<?php

$a = 1;

while ($a <= 10) {
	if ($a == 5) {
		$a++;
		continue;
	}

	echo $a;
	$a++;
}

echo "\n";
