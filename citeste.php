<?php
	$filename = 'README';
    $continut = file_get_contents($filename);
	if ($continut===false) {
		echo "Aveti o probemă la citirea filei: ".$filename;
	} else {
		echo strtoupper($continut);
	}
?>