<?php
if($startaction==1 && $acao=="logar")
{
        //Dados
        $email=addslashes($_POST['email']);
        $senha=addslashes(sha1($_POST['senha']."senha"));
        //verifica os campos estão cheios
        if(empty($email) || empty($senha))
        {   //mensagem de erro
            $msg="Preencha todos os campos";
        }else
        {   //verifica se o email é válido
            if(!filter_var($email,FILTER_VALIDATE_EMAIL))
            {   //mensagem de erro
                $msg="Digite seu e-mail corretamente!";
            }
            else
            {   
                //Executa a busca pelo usuário
                $login=new Login;
                $emaild=$_SESSION['email'];
                $senhad=$_SESSION['senha'];
                echo "<div class=\"flash\">";
                $login=$login->logar($email,$senha);
                echo "</div>";
            }
        }
}
?>