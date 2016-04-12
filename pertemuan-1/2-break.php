<?php

$a = 1;

while ($a <= 100000000000000) {
	$a++;
	echo $a;
	if ($a == 5) {
		break;
	}
}

echo "\n";
