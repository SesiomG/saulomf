<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!--jquerry -- link cdn-->
        <script sr="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <!--jquerry -- link cdn-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    </head>
    <body>
        <!-- Static navbar -->
        <nav class="navbar navbar-default navbar-static-top">
            <div class="contanier">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="colapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                        <spam class="sr-only">Toggle navigation</spam>
                        <spam class="icon-bar"></spam>
                        <spam class="icon-bar"></spam>
                        <spam class="icon-bar"></spam>
                    </button>
                    <img src="imagens/icone_twitter.png"/>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php">Voltar para Home</a></li>
                    </ul>
                </div><!-- /.nav-collapse -->
            </div>
        </nav>
        <div class='container'>
            <br /><br />
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h3>Inscreva-se já.</h3>
                <br />
                <form method="post" action="" id="formCadastrarse">
                    <div class="form-group">
                        <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuário"
                               required="requiored">
                    </div>
                    
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="
                               requiored">
                    </div>
                    
                    <div class="form-group">
                        <input type="password" class="form-control" id="senha" placeholder="Senha" required="requiored">
                    </div>
                    <button type="submit" class="btn btn-primary form-control">Inscreva-se</button>
                </form>
        
        <div class="col-md-4"></div>
        <div class="clearfix"></div>
        <br />
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        </div>
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap3.3.6/js/bootstrap.min.js"></script>
        
    </body>
</html>
