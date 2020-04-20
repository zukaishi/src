<?php
/*
$str = "aAAbbbbb";
$res = null;

var_dump(preg_match_all( '/a|A/', $str, $res));

echo wordwrap($str, 1, "|",true);
*/


echo numJewelsInStones("bBc","bAAAAABBCCc");

    function numJewelsInStones($J, $S) {
	//$test = wordwrap($J, 1, "|",true);
	$return = null;
	preg_match_all( '/'. wordwrap($J, 1, "|",true) . '/', $S, $return); 
	return count($return[0]);      
    }

