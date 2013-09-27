<?php
	
	$nume=$_POST['nume'];
	$email=$_POST['email'];
	$telefon =$_POST['telefon'];

	$string= $nume." , ".$email." , ".$telefon. "\n";
    $filename='text.txt';
    $mode ='a';
    $file=fopen($filename, $mode)or die("fila nu a fost deschisa");
    fwrite($file, $string);
   ?>
   
   <form action="<?php echo $_SERVER['SCRIPT_NAME']?>" method="post" >
   	Nume/Prenume:<input type="text" name="nume" />
   	E-mail:<input type="text" name="email" />
   	Telefon:<input type="tel" name="telefon" />
   	<input type="submit" value="Inregistreaza" />
   </form> 
   
<?php
$filename ='text.txt';
if (file_exists($filename)&& is_readable($filename)) {
	$utilizatori=file($filename);
	for ($i=0; $i < count($utilizatori) ; $i++) { 
		$tmp=explode(",", $utilizatori[$i]);
		$utilizatori[$i]= array('nume'=>$tmp[0], 'email'=>$tmp[1], 'telefon'=>$tmp[2]);
	}
	
} else {
	echo "Nu s-a putut deschide fila: ".$filename;
}

?>
<pre>
	<?php print_r($utilizatori); ?>
</pre>