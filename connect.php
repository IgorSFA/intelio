<?php	
	$local = "localhost";
	$user = "root";
	$key = "7fb6a0e62fefcec3641059ccfc791505e5af75299063ca7d";
	
	$connect = mysqli_connect($local,$user, $key);

	mysqli_select_db($connect, "Intelio") or die("Não foi possivel selecionar o banco de dados."); //acessa db 

	//Cadastrar
		if( isset($_POST["email"]) && isset($_POST["empresa"]) && isset($_POST["senha"]) ){
			$email = $_POST["email"];
			$empresa = $_POST["empresa"];
			$senha = $_POST["senha"];

			//Cadastro de usuario
			$cadastro = "INSERT INTO revendedor (Email, Empresa, Senha) VALUES ('$email', '$empresa', '$senha')";
			$cadastrar = mysqli_query($connect, $cadastro) or die("Falha na execução da consulta");
		}

	//Upload CSV
   if(isset($_FILES['filecsv'])){

      $ext = strtolower(substr($_FILES['filecsv']['name'],-4)); //Pegando extensão do arquivo
      $name = $_FILES['filecsv']['name'].$ext;
      $dir = 'uploads/'; //Diretório para uploads

      move_uploaded_file($_FILES['filecsv']['tmp_name'], $dir.$name); //Fazer upload do arquivo
   }
	//Ler Excel
	//Open the file.
	/*$fileHandle = fopen("teste.csv", "r");
	$row =  fgetcsv($fileHandle, 0, ",");
	//Loop through the CSV rows.
	while (($row = fgetcsv($fileHandle, 0, ",")) !== FALSE) {
	    //Print out my column data.
	    echo 'Name: ' . $row[0] . '<br>';
	    echo 'Country: ' . $row[1] . '<br>';
	    echo 'Age: ' . $row[2] . '<br>';
	    echo '<br>';
	} */

	$connect->close();
?>
