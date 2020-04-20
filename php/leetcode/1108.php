<?php


echo defangIPaddr("1.1.1.1");
function  defangIPaddr($address) {
	return str_replace('.', '[.]', $address);
}
