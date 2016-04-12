<?php

$outer = 5;
$inner = 5;

$a = 1;
$b = 1;
while ($a <= $outer) {
	while($b <= $inner) {
		if ($b % $a == 1) {
			$b++;
			continue;
		}
		echo "*";
		$b++;
	}
	$a++;
	$b = 1;
	echo "\n";
}
