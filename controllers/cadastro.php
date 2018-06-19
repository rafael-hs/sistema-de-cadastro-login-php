<?php 
if($startaction==1 && $acao=="cadastrar")
{
       $nome=$_POST["nome"];
       $usuario=$_POST["usuario"];
       $idade=$_POST["idade"];
       $endereco=$_POST["endereco"];
       $email=$_POST["email"];
       $senha=$_POST["senha"];
       $csenha=$_POST["csenha"];
        //verificando se existe algum campo vazio
       if(empty($nome) || empty($endereco) || empty($email) || empty($senha) || empty($usuario) || empty($idade))
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
            if($senha == $csenha)
            {
                //executar a classe de cadastro
                    $connectar = new Cadastro;
                    echo "<div class=\"flash\">";
                    $connectar = $connectar->cadastrar($nome,$usuario,$idade,$endereco,$email,$senha);
                    echo "</div>";
                
            }else
            {
                $msg="Verifique se as senhas são iguais";
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