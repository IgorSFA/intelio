<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">

	    <title>Logar</title>

	    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

	    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.min.css">
	    <link rel="stylesheet" href="lib/simple-line-icons/css/simple-line-icons.css">
	    <link rel="stylesheet" href="lib/device-mockups/device-mockups.min.css">

	    <link href="css/new-age.min.css" rel="stylesheet">
	</head>
	<body>
    <?php include 'connect.php' ?>
	<section>
		<div class="container text-center">
			<img src="img/logo.png" style="width: 20%; margin-bottom: 15px;">
		</div>
		<form class="form-inline text-center" action="logar.php" method="POST">
		  <div class="form-group">
		    <label class="sr-only" for="exampleInputEmail3">Email address</label>
		    <input type="email" class="form-control" id="exampleInputEmail3" name="email_login" placeholder="Email">
		  </div>
		  <p>
		  <div class="form-group">
		    <label class="sr-only" for="exampleInputPassword3">Password</label>
		    <input type="password" class="form-control" id="exampleInputPassword3" name="senha_login" placeholder="Senha">
		  </div>
		  <p><p>
		  <button type="submit" class="btn btn-default">Logar</button>
		</form>
	</section>
			
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/new-age.min.js"></script>

	</body>
</html>