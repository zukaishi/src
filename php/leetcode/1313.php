<?php

$array = [1,2,3,4];
print_r(decompressRLElist($array));

function decompressRLElist($nums) {
	$return = array();
	for( $i =0; $i< count($nums); $i+=2 ){
		for( $j=0; $j < $nums[$i]; $j++){
			$return[] = $nums[$i+1];
		}
	}
	return $return;
}

