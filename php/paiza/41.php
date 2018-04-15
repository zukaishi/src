<?php
while ($line = trim(fgets(STDIN))) {
  	$input[] = trim($line);
}

for($j = 1; $j <= $input[0]; $j++ ) {
	$even = 0;
	$odd = 0;

	$test = $input[$j];
	for($i = 0; $i < strlen($test)-1; $i++) {
  		if( (16-$i) % 2 != 0 ){
    			$odd += $test[$i];
  		} else {
    			$tmp = $test[$i] * 2;
    			$tmp2 = 0;
    			if($tmp >= 10 ) {
      				$tmp2 = floor($tmp / 10) + $tmp - floor($tmp / 10 ) * 10;
    			} else {
      				$tmp2 = $tmp;
    			}
    			$even += $tmp2;
  		}	
	}

	$sum = $even + $odd;
	$ans = 0;
	if( $sum % 10 != 0 ) {  
		$ans = 10 - ( $sum- floor($sum / 10 ) * 10 );
	}
	echo $ans . PHP_EOL;
}
