<?php
while ($line = trim(fgets(STDIN))) {
  	$tmp[] = trim($line);
}
//print_r($tmp);
//echo PHP_EOL;

list( $n,$k) = explode(" ",$tmp[0]);
$box= array();

for($i = 1; $i <= $n; $i ++ ) {
	// echo $tmp[$i] .PHP_EOL;
	$line = explode(" ",$tmp[$i]);
	for($j = 0; $j < $n; $j ++ ) {
		//echo $line[$j];
		$box[$i-1][$j] = $line[$j];
	}
}

$box2 = array();
for($i = 0; $i < $n; $i ++ ) {
	for($j = 0; $j < $n; $j ++ ) {
		if(isset($box2[floor($i/$k)][floor($j/$k)])) {
			$box2[floor($i/$k)][floor($j/$k)] += $box[$i][$j];
		} else {
			$box2[floor($i/$k)][floor($j/$k)] = $box[$i][$j];
		}	
	}
}
foreach ($box2 as $key1 => $value1) {
  $str = "";
  foreach ($value1 as $key2 => $value2) {
    $str .= floor($value2 / ($k*$k) )." ";
  }
  echo trim($str). PHP_EOL;
}

