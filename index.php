<?php

function my_strtoupper($input){
	$result = '';
	$length = strlen($input);

	for($i = 0; $i < $length; $i++){
		$char = $input[$i]; 
		$ascii = ord($char);

		if($ascii >= 97 && $ascii <= 122){
			$char = chr($ascii - 32);
		}

		$result .= $char;
	}

	return $result;
}

