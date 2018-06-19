<?php
if($startaction==1 && $acao=="logar")
{
        //Dados
        $usuario=addslashes($_POST['usuario']);
        $senha=addslashes(sha1($_POST['senha']."senha"));
        //verifica os campos estão cheios
        if(empty($usuario) || empty($senha))
        {   //mensagem de erro
            $msg="Preencha todos os campos";
        }else
        {      
                //Executa a busca pelo usuário
                $login=new Login;
                $usuariod=$_SESSION['usuario'];
                $senhad=$_SESSION['senha'];
                echo "<div class=\"flash\">";
                $login=$login->logar($usuario,$senha);
                echo "</div>";
            
        }
}
?>