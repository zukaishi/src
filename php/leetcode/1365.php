<?php

$array = [8,1,2,2,3];
print_r (smallerNumbersThanCurrent($array) );
function smallerNumbersThanCurrent($nums) {
	for( $i =0; $i < count($nums); $i++  ) {
		$return[$i] = 0;
		for( $j =0; $j < count($nums); $j++ ){
			if( $nums[$i] > $nums[$j] ) {
				$return[$i]++;
			}
		}
	}
	return $return;
}


