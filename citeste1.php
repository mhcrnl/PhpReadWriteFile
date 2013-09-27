<?php
	$filename='flatFile.txt';
	//citirea filei intrun array
    $utilizatori=file($filename);
	//preluam intr-un loop
	for($i=0; $i < count($utilizatori); $i++){
		// separam elementele 
		$tmp=explode(", " , $utilizatori[$i]);
		// atribuim valorile unei chei
		$utilizatori[$i]=array('nume' => $tmp[0], 'parola' => $tmp[1]);
	}
	
?>
<pre>
	<?php print_r($utilizatori); ?>
</pre>