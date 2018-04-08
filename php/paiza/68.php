<?php
while ($line = trim(fgets(STDIN))) {
  	$tmp[] = trim($line);
}

for($i =1; $i < count($tmp); $i++ ) {

$num = $tmp[$i];
$sum = 0;
for($j = $num; $j >=1; $j-- ){
	if( $j != $num && $num % $j === 0 ) {
		$sum += $j;
	}
}
if( $sum == $num ) {
	echo "perfect". PHP_EOL;
} else if( $sum +1 == $num ) {
	echo "nearly". PHP_EOL;
} else {
	echo "neither". PHP_EOL;
}
}
