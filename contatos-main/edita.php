
<?php
    $arquivo=fopen("contatos.txt", "r");
    $arquivo2=fopen("contatos2.txt", "a+");
    while(!feof($arquivo))
    {
        $pessoa=explode("|", fgets($arquivo));
    }
    fclose($arquivo);
    $posicao=$_GET['posicao'];
    $data=$_POST['data'];
    $anotacao=$_POST['anotacao'];
    $pessoa[$posicao]=$data;
    $pessoa[$posicao+1]=$anotacao;
    unlink("contatos.txt");
    rename("contatos2.txt","contatos.txt");
    $arquivo=fopen("contatos.txt", "a+");
    $contador=count($pessoa);
    $i=0;
    while($i<=$contador-2)
    {
        $gravar=$pessoa[$i]."|";
        fwrite($arquivo, $gravar);
        $i++;
    }
    fclose($arquivo2);
    fclose($arquivo);
    echo "<script>
        alert('Anotação editada com sucesso!');
        window.location.href='index.php';
        </script>";
?>