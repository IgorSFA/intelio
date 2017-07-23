<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Intelio</title>

    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="lib/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="lib/device-mockups/device-mockups.min.css">

    <link href="css/new-age.min.css" rel="stylesheet">

</head>

<body id="page-top">
    <?php include 'connect.php' ?>
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><img src="img/logo.png" class="img-responsive" style="width: 9%"></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#features">Funções</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#download">Download</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Cadastrar dados</a>
                    </li>
                    <li>
                        <a href="user.php" target="_new">Área Restrita</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <div class="header-content">
                        <div class="header-content-inner">
                            <h1>Esta é a página do Intelio,onde fazemos a comunicação dos revendedores e lojistas que utilizam a maquina da Cielo Lio!</h1>
                            <a href="#features" class="btn btn-outline btn-xl page-scroll">Saiba mais!</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                     <div class="device-container">
                     <img src="img/cieloLio2.png" class="img-responsive" alt="">

                     <!--
                        <div class="device-mockup iphone6_plus portrait white">
                            <div class="device">
                                <div class="screen">
                                    Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! 
                                    <img src="img/cieloLio.png" class="img-responsive" alt="">
                                </div>
                                <div class="button">
                                     You can hook the "home button" to some JavaScript events or just remove it
                                </div>
                            </div>
                        </div>-->
                    </div> 
                </div>
            </div>
        </div>
    </header>

    <section id="features" class="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h2>Funções:</h2>
                        <p class="text-muted">Veja o que nosso app é capaz de fazer</p>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="device-container">
                        <img src="img/cieloLio.png" class="img-responsive" alt="">
                        <!--<div class="device-mockup iphone6_plus portrait white">
                            <div class="device">
                                <div class="screen">
                                    Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! 
                                    <img src="img/demo-screen-1.jpg" class="img-responsive" alt=""> </div>
                                <div class="button">
                                    You can hook the "home button" to some JavaScript events or just remove it 
                                </div>
                            </div>
                        </div>-->
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <i class="icon-screen-smartphone text-primary"></i>
                                    <h3>Facilidade de comunicação com seu fornecedor</h3>
                                    <p class="text-muted">Pelo proprio celular o revendedor consegue colocar seus produtos em nossa lista e você com sua Cielo Lio consegue acesso facilmente a essa lista.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <i class="icon-check text-primary"></i>
                                    <h3>Gerenciamento de estoques e vendas</h3>
                                    <p class="text-muted">Seus produtos com controle e facilidade de organização.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <i class="icon-list text-primary"></i>
                                    <h3>Sugestões de organização</h3>
                                    <p class="text-muted">Com bases nos dados obtidos em sua maquina Cielo Lio, podemos lhe sugerir dicas para seu negócio.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <i class="icon-wallet text-primary"></i>
                                    <h3>Retorno Financeiro</h3>
                                    <p class="text-muted">Com nossas dicas e agilidade para realizar tarefas, percebendo melhoras financeiras em seu negócio.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="download" class="download bg-primary text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-heading">
                        <h2>Lojista:</h2>
                        <hr>
                    </div>
                    <h2 class="section-heading">Baixe nosso app na Cielo Store!</h2>
                    <div class="badges">
                        <a class="badge-link" href="https://cielostore.m4u.com.br/" target="_new"><img src="img/logoStore.png"></a>
                        <!-- <a class="badge-link" href="#"><img src="img/google-play-badge.svg" alt=""></a>
                        <a class="badge-link" href="#"><img src="img/app-store-badge.svg" alt=""></a>-->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="cta-content">
            <div class="col-md-12" align="center">
                <h2 style="font-size: 50px">Revendedores:</h2>
                <hr>
            </div>
            <div class="container">
                <h2>Não esperem mais.<br>Encontrem compradores.</h2>
                <a href="#contact" class="btn btn-outline btn-xl page-scroll">Cadastre seus produtos!</a>
            </div>
        </div>
        <div class="overlay"></div>
    </section>

    <section id="contact" class="contact bg-primary">
        <div class="container">
            <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="#contact">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" id="inputEmail3" placeholder="Email">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmpresa3" class="col-sm-2 control-label">Nome empresa</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="empresa" id="inputEmpresa3" placeholder="Nome empresa">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Senha</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" name="senha" id="inputEmpresa3" placeholder="Senha">
                  </div>
                </div>

                 <div class="form-group">
                  <label for="inputProdutosd3" class="col-sm-2 control-label">Produtos</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" name="filecsv" id="inputEmpresa3" placeholder="Produtos">
                  </div>
                </div>
         
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Cadastrar dados</button>
                  </div>
                </div>
            </form>
            <!--<h2>We <i class="fa fa-heart"></i> new friends!</h2>
            <ul class="list-inline list-social">
                <li class="social-twitter">
                    <a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li class="social-facebook">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li class="social-google-plus">
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                </li>
            </ul>-->
        </div> 
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2017 RedBeach Code. Todos os direitos reservados.</p>
            <ul class="list-inline">
                <li>
                    <a href="#">Privacidade</a>
                </li>
                <li>
                    <a href="#">Termos</a>
                </li>
                <li>
                    <a href="#">FAQ</a>
                </li>
            </ul>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="lib/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/new-age.min.js"></script>

</body>

</html>
