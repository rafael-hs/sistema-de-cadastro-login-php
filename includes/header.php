<?php
//starts
ob_start();
session_start();
//Globais
$home="http://localhost/sistemaphp/";
$title="sistemaPHP";
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
include("/classes/Login.class.php");
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
                echo "<div class=\"flash\">";
                $connectar = $connectar->cadastrar($nome,$endereco,$email,$senha);
                echo "</div>";
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

//metodo de login
if($startaction==1)
{
   if($acao=="logar")
   {
        //Dados
        $email=addslashes($_POST['email']);
        $senha=addslashes(sha1($_POST['senha']."senha"));

        if(empty($email) || empty($senha))
        {
            $msg="Preencha todos os campos";
        }else
        {
            if(!filter_var($email,FILTER_VALIDATE_EMAIL))
            {
                $msg="Digite seu e-mail corretamente!";
            }
            else
            {
                //Executa a busca pelo usuário
                $login=new Login;
                $emaild=$_SESSION['email'];
                $senhad=$_SESSION=['senha'];
                echo "<div class=\"flash\">";
                $login=$login->logar($email,$senha);
                echo "</div>";
            }
        }
   }
}

//Metodo de checar usuário
if(isset($_SESSION['email']) && isset($_SESSION['senha']))
{
    $logado=1;
    $nivel=$_SESSION['nivel'];
}

//variaveis de estilo
if(empty($msg)){
    $display="display:none;";
}else{
    $display="display:block;";
}

//testando conexão com o bando fazendo select retornando o numero de registros.
//$query = mysql_query("SELECT * FROM usuarios");
//echo "<h1>".mysql_num_rows($query)."</h1>";

?>
