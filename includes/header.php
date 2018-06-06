<?php
//starts
ob_start();
session_start();
//Globais
include("globais.php");
//include das classes
include("/classes/DB.class.php");
include("/classes/Cadastro.class.php");
include("/classes/Login.class.php");

//oculta o erro de versão do php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);

//Conexão com o banco de dados
$conectar= new DB;
$conectar=$conectar->conectar();

//Metodos
include("controllers/cadastro.php");
include("controllers/login.php");
include("controllers/logout.php");
include("controllers/check.php");
include("controllers/aprovar.php");
include("controllers/bloquear.php");
include("controllers/style.php");

//testando conexão com o bando fazendo select retornando o numero de registros.
//$query = mysql_query("SELECT * FROM usuarios");
//echo "<h1>".mysql_num_rows($query)."</h1>";
?>
