<?php
$str = trim(fgets(STDIN));
for($i = 0; $i < strlen($str); $i++) {
        $array[] =  $str[$i];
}
$check = array();
for($i = 0; $i <= 3; $i++ ) {
	$key = $array[$i];
	if( isset($check[$key]) ) {
		$check[$key]++;
	} else {
		$check[$key] = 1;
	}
}
krsort($check);
$cnt = 0;
foreach( $check as $value ){
	$cnt++;
	$check2[$cnt] = $value;
}
switch( count($check) ) {
	case 1:
		echo "FourCard";
		break;
	case 2:
		if( isset($check["*"]) ) {
			echo "FourCard";
		} else if( $check2[1] != $check2[2]){
			echo "ThreeCard";
		} else {
			echo "TwoPair";
		}
		break;
	case 3:
		if( isset($check["*"]) ) {
			echo "ThreeCard";
		} else {
			echo "OnePair";
		}
		break;
	case 4:
		if( isset($check["*"]) ) {
			echo "OnePair";
		} else {
			echo "NoPair";
		}
}
