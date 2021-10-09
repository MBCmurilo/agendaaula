<?php
    $posicao = $_GET['posicao'];
    $arquivo = fopen("contatos.txt", "r");
    while(!feof($arquivo))
    {
        $pessoa = explode("|", fgets($arquivo));
    }
    fclose($arquivo);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="content-language" content="pt-br"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>Minha Agenda</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <header>
        <nav class="navbar navbar-dark bg-dark">
        </nav>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <h3>Edição de Anotação</h3>
                </div>
            </nav>
        </header>
        <div class="container-fluid">
            <section>
                <br/>
                <div class="row justify-content-center row-cols-2 row-cols-md-1 mb-3 text-center">
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-hearder py-3">
                                <h4 class="my-0 fw-normal"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-brush" viewBox="0 0 16 16">
  <path d="M15.825.12a.5.5 0 0 1 .132.584c-1.53 3.43-4.743 8.17-7.095 10.64a6.067 6.067 0 0 1-2.373 1.534c-.018.227-.06.538-.16.868-.201.659-.667 1.479-1.708 1.74a8.118 8.118 0 0 1-3.078.132 3.659 3.659 0 0 1-.562-.135 1.382 1.382 0 0 1-.466-.247.714.714 0 0 1-.204-.288.622.622 0 0 1 .004-.443c.095-.245.316-.38.461-.452.394-.197.625-.453.867-.826.095-.144.184-.297.287-.472l.117-.198c.151-.255.326-.54.546-.848.528-.739 1.201-.925 1.746-.896.126.007.243.025.348.048.062-.172.142-.38.238-.608.261-.619.658-1.419 1.187-2.069 2.176-2.67 6.18-6.206 9.117-8.104a.5.5 0 0 1 .596.04zM4.705 11.912a1.23 1.23 0 0 0-.419-.1c-.246-.013-.573.05-.879.479-.197.275-.355.532-.5.777l-.105.177c-.106.181-.213.362-.32.528a3.39 3.39 0 0 1-.76.861c.69.112 1.736.111 2.657-.12.559-.139.843-.569.993-1.06a3.122 3.122 0 0 0 .126-.75l-.793-.792zm1.44.026c.12-.04.277-.1.458-.183a5.068 5.068 0 0 0 1.535-1.1c1.9-1.996 4.412-5.57 6.052-8.631-2.59 1.927-5.566 4.66-7.302 6.792-.442.543-.795 1.243-1.042 1.826-.121.288-.214.54-.275.72v.001l.575.575zm-4.973 3.04.007-.005a.031.031 0 0 1-.007.004zm3.582-3.043.002.001h-.002z"/>
</svg>&nbsp;<b>Editar anotação</b></h4>
                            </div>
                            <div class="card-body">
                            <form action="edita.php?posicao=<?php echo $posicao; ?>" method="POST">
                                <div class="form-group">
                                    <label><h5>Data</h5></label>
                                    <input type="date" class="form-control" name="data" value="<?php echo $pessoa[$posicao]; ?>" required/>
                                    <br/>
                                    <label><h5>Anotação</h5></label>
                                    <input type="text" class="form-control" name="anotacao" value="<?php echo $pessoa[$posicao+1]; ?>" required/>
                                    <br/>
                                    <button type="submit" class="btn btn-primary btn-lg">Atualizar</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edição</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <?php
                            include 'cadastro.php';
                        ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
        <footer>
        <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
        </nav>
        <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
        </nav>
        </nav>
        <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
        </nav>
        </nav>
        <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
        <center><h6><font color="white">Desenvolvido pelo melhor programador da sala TDS06 Murilo</font></h6></center>
        </nav>
        </nav>
        <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
        </nav>
        </nav>
        <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
        </nav>
        <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
        </nav>
        </footer>
    </body>
</html>