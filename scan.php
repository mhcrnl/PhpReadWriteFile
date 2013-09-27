<?php
    $expresion= opendir('../Pictures');
	$file=array();
	while(FALSE !==($item=readdir($expresion))){
		$file[]=$item;
	}
	//print_r($expression)
	closedir($expresion);
?>