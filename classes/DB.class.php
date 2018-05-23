<?php 
    class DB
    {
        public function conectar()
        {
            //oculta o erro de versão do php
            error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
            $host="localhost";
            $user="root";
            $pass="";
            $dbname="sistemaphp";

            $conexao=mysql_connect($host,$user,$pass);
            $selectdb=mysql_select_db($dbname);

            return $conexao;
        }
    }

?>