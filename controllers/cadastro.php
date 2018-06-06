<?php 
if($startaction==1 && $acao=="cadastrar")
{
       $nome=$_POST["nome"];
       $endereco=$_POST["endereco"];
       $email=$_POST["email"];
       $senha=$_POST["senha"];
        //verificando se existe algum campo vazio
       if(empty($nome) || empty($endereco) || empty($email) || empty($senha))
       {    //mensagem de erro
           $msg="Preencha todos os campos!";
       }else
       {
          //validação de email
          if(filter_var($email,FILTER_VALIDATE_EMAIL))
          { //verifica se a senha tem no minimo 8 ou mais caracteres
            if(strlen($senha)<8)
            {
            //senha inválida
            //mensagem de erro
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
          {//mensagem de erro
            $msg="Digite seu emai corretamente!";
          }
       }
}

?>