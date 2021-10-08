<?php
    class Handler
    {
        public static function arrayHandler()
        {
            $a = [];
            $a['data'] = $_POST['data'];
            $a['anotacao'] = $_POST['anotacao'];

            $gravar = $_POST['data']."|".$_POST['anotacao']."|";
            $arquivo = fopen('contatos.txt', 'a+');
            fwrite($arquivo, $gravar);
            fclose($arquivo);
            return $a;
        }
    }
?>