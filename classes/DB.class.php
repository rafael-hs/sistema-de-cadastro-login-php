<?php 
    class DB
    {
        public function conectar()
        {
            //oculta o erro de versão do php
            error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
            $host="localhost";//nome do servidor
            $user="root";//usuário do server
            $pass="";//senha do usuário
            $dbname="sistemaphp";//nome do banco

            $conexao=mysql_connect($host,$user,$pass);//faz a conexão com o banco
            $selectdb=mysql_select_db($dbname);//seleciona o banco

            return $conexao;//retorna conexão com banco
        }
    }

?>