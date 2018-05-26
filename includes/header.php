<?php 
//Globais
$home="http://localhost/sistemaphp/";
$title="sistemaPHP - ADM";
$startaction="";
$msg="";
if(isset($_GET["acao"]))
{
   $acao=$_GET["acao"];
   $startaction=1;
}
//include das classes
include("/classes/DB.class.php");
include("/classes/Cadastro.class.php");
//oculta o erro de versão do php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
//Conexão com o banco de dados
$conectar= new DB;
$conectar=$conectar->conectar();

//Metodo de cadastro
if($startaction==1)
{
   if($acao=="cadastrar")
   {
       $nome=$_POST["nome"];
       $endereco=$_POST["endereco"];
       $email=$_POST["email"];
       $senha=$_POST["senha"];
        //verificando se existe algum campo vazio
       if(empty($nome) || empty($endereco) || empty($email) || empty($senha))
       {
           $msg="Preencha todos os campos!";
       }else
       {  
          //validação de email
          if(filter_var($email,FILTER_VALIDATE_EMAIL))
          {
            if(strlen($senha)<8)
            {
            //senha inválida
                $msg="As senhas devem ter no mínimo oito caracteres!";
            }
            //senha válida
            else
            {
            //executar a classe de cadastro
                $connectar = new Cadastro;
                $connectar = $conectar->cadastrar($nome,$endereco,$email,$senha);
            }
          }
          //email invalido
          else
          {
            $msg="Digite seu emai corretamente!";
          }
       }

   }
}


//testando conexão com o bando fazendo select retornando o numero de registros.
//$query = mysql_query("SELECT * FROM usuarios");
//echo "<h1>".mysql_num_rows($query)."</h1>";

?>