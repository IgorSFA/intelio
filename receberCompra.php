<?php
	if(isset($_POST['message'])){
		$myfile = fopen(dirname(__FILE__) . "/apiori/compras.csv", "a") or die("Unable to open file!");
		fwrite($myfile, $_POST['message'] . PHP_EOL);
		fclose($myfile);
	}
