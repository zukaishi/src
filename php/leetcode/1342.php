<?php

echo funmberOfSetps(14);

function funmberOfSetps($num) {
	$step=0;
	while($num) {
		$num = $num%2  ? $num-1: $num/2;
		$step++;
	}
	return $step;
}
