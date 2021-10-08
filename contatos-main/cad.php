<?php
    require 'cadpessoa.php';
    $dados = Handler::arrayHandler();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="content-language" content="pt-br"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <center><img src="imagem/c.jpg" width="100%" height="100%"/></center>
            <nav>
                <div class="container-fluid">
                    <br><h3>Dados da anotação</h3>
                    <table border=1 cellpadding=5>
                </div>
            </nav>
        </header>
        <br/><br/>
        <div class="row justify-content-center row-cols-2 row-cols-md-2 mb-3 text-justify">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3 text-center">
                        <h4 class="my-0 fw-normal"><b>Confirmação</b></h4>
                    </div>
                    <div class="card-body">
                        <?php
                            echo "<b>Data da sua anotação:</b>".$dados['data']."<br/>";
                            echo "<b>Anotação:</b>".$dados['anotacao']."<br/>";
                        ?>
                        <br/><br/>
                        <a href="index.php"><button class="btn btn-info">Voltar</button></a>
                    </div>
                </div>
            </div>
        </div>
        <footer>
        <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
        <center><h6><font color="white">Desenvolvido pelo melhor programador da sala TDS06 Murilo</font></h6></center>
        </nav>
        </footer>
    </body>
</html>