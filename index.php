<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Twitter Clone</title>
        <!--jquerry -- link cdn-->
        <script sr="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <!--jquerry -- link cdn-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        
        <script>
            <!código javascript>    
            </script>
    </head>
    <body>
        
        <!--static navbar-->
        <nav class="navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapse" data-target="#navbar"
                            aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                    <img scr="imagens/twitter.png" />
                    </div>
                
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="inscrevasse.php">Inscrever-se</a></li>
                        <li class="">
                            <a id="entrar" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true"
                               aria-expanded="false">Entrar</a>
                            <ul class="dropdown-menu" aria-labelledby="entrar">
                                <div class="col-md-12">
                                    <p>Você possui uma conta?</h3>
                                        <br />
                                        <form method="post" action="" id="formLogin">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="campo_uduario" name="usuario"
                                                placeholder="Usuário" />
                                            </div>
                                            <div class ="form-group">
                                                <input type="password" class="form-control red" id="campo_senha" name="senha"
                                                       placeholder="Senha" />
                                            </div>
                                            <button type="button" class="btn btn-primary" id="btn_login">Entrar</button>
                                            <br /><br />
                                        </form>
                                </div>
                                            </ul>
                        </li>
                    </ul>
                </div><!--/.nav-collapse-->
            </div>
        </nav>
        <div class="contanier">
            <!--Main component for a primary marketing message or call to action -->
            <div class="jumbotron">
                <h1>Bem vindo ao twitter clone</h1>
                <p>Veja o que está acontecendo agora...</p>
            </div>
            <div class="clearfix"></div>
        </div>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap3.3.6/js/bootstrap.min.js"></script>
        
    
        <?php
        // put your code here
        ?>
    </body>
</html>
