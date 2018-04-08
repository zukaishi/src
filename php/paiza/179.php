<?php
while ($line = trim(fgets(STDIN))) {
  	$tmp[] = trim($line);
}

list($num,$str_list) = explode(" ",$tmp[0]);
$target_str = $tmp[1];

for($i = 0; $i < 26; $i++) {
	$str[$i] = $str_list[$i];
	$strs[$str_list[$i]] = $i;
	$alphabet[$i] = chr(-159+$i);
}
$output_str = $target_str;
if( $num > 0 ){
for($i=0; $i < $num; $i++ ){
	$output_str = "";
	for($j = 0; $j < strlen($target_str); $j++ ) {
        	$target_str[$j] !== " " ? $output_str .= $alphabet[$strs[$target_str[$j]]] : $output_str .= " ";
	}
	$target_str = $output_str;
}
}

echo $output_str;
