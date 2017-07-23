<html>
	<head>
		 <title> Site </title> 
		 <? php include 'connect.php' ?>
		 <?php 
		 	session_start();
		 	if( (!isset ($_SESSION['email_login']) == true)  and (!isset($_SESSION['senha_login']) == true)){
		 			unset($_SESSION['email_login']);
					unset($_SESSION['senha_login']);
					header('location:logar.php');
		 	}

		 	if(isset($_GET["logout"])) {
		 		session_destroy();
		 		header('location:index.php');
		 		exit;
		 	}

		 	$logado = $_SESSION['email_login']
		 ?>

	</head>
	<body>
	<?php 
		echo "Ola $logado";
	?>
	
	<a href="site.php?logout=1"><input type="submit" value="Logout"></a>

	</body>
</html>