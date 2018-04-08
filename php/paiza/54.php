<?php  
$str = trim(fgets(STDIN));  
// var_dump($stdin);

for( $i = 0; $i < strlen($str); $i++) {
	// echo $str[$i]."\n";
	switch( $str[$i]) {
		case "A":echo 4;break;
		case "E":echo 3;break;
		case "G":echo 6;break;
		case "I":echo 1;break;
		case "O":echo 0;break;
		case "S":echo 5;break;
		case "Z":echo 2;break;
		default: echo $str[$i];break;
	}
}

