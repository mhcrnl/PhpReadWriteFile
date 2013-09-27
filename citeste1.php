<?php
	
	
	$filename='flatFile.txt';
	//nu este de neglijat aspectul verificarii file daca pernite accesul
	if (file_exists($filename) && is_readable($filename)) {
	//citirea filei intrun array
    $utilizatori=file($filename);
	//preluam intr-un loop
	for($i=0; $i < count($utilizatori); $i++){
		// separam elementele 
		$tmp=explode(", " , $utilizatori[$i]);
		// atribuim valorile unei chei
		$utilizatori[$i]=array('nume' => $tmp[0], 'parola' => $tmp[1]);
	}
	}
	else {
		echo "Fila nu poate fi deschisa: ".$filename;
	}
	
?>
<pre>
	<?php print_r($utilizatori); ?>
</pre>