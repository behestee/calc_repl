#!d:\xampp\php\php.exe
<?php
//c:\xampp\php\php.exe -f calc.php -dcli.prompt="\nphp> " -a input_fie_name
//calc.php input.txt
$file_name = $argv[1];

require_once('./command_lib.inc'); 

$cur_val = file_get_contents($file_name);
echo $cur_val;
echo "\n";

$fp = fopen("php://stdin", "r");
$in = '';
while($in != "exit") {
    echo "> ";
    $in = trim(fgets($fp));
	
	//here will be the eval logic
    $ret_val = eval_st ($in, $cur_val);
	echo $ret_val;
    echo "\n";
	
	if($ret_val === false) continue;
	$cur_val = $ret_val;
	
}
	
function eval_st($st, $curr_val){
	$args = explode(" ", $st);
	$command = array_shift($args);
	if($command == 'exit') return false;
	array_unshift($args, $curr_val);
	if(is_callable($command, false, $callable_name)){
		return $callable_name($args);
	}else{
		echo "invalid command";
		return false;
	}
}
   
?>