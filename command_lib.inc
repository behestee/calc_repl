<?php
function add($args){
	$curr_val = array_shift($args);
	if(isset($args[0]) && is_numeric($args[0])){
		return $curr_val + $args[0];
	}else{
		echo "numeric param needed";
		return false;
	}
}

function sub($args){
	$curr_val = array_shift($args);
	
	if(isset($args[0]) && is_numeric($args[0])){
		return $curr_val - $args[0];
	}else{
		echo "numeric param needed";
		return false;
	}
}

function show($args){
	$curr_val = array_shift($args);
	return $curr_val;
}

function clear(){
	global $file_name;
	file_put_contents($file_name, "0");
	return 0;
}

?>