<?php
$array = [12,345,2,6,7896];
print_r ( findNumbers($array) ) ;
function findNumbers($nums) {
	$count = 0;
	for( $i = 0; $i < count($nums); $i++  ){
		if ( strlen($nums[$i])% 2 == 0 ) {
			$count++;
		}
	}
	return $count;
}

