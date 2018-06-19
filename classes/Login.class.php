<?php 
    class Login
    {
        public function logar($email,$senha)
        {   //faz a busca no banco de dados se esse usuário ja existe
            $buscar=mysql_query("SELECT * FROM usuarios WHERE email='$email' AND senha='$senha' LIMIT 1");
            //verifica se retornou algum usuário com o numero de linhas afetadas
            if(mysql_num_rows($buscar)==1)
            {   //faz um array do resultado da busca
                $dados=mysql_fetch_array($buscar);
                if($dados["status"]==1)
                {   //atribui a variavel session os dados do usuário
                    $_SESSION["email"]=$dados["email"];
                    $_SESSION['senha']=$dados['senha'];
                    $_SESSION['nivel']=$dados['nivel'];
                    setcookie("logado",1);
                    $log=1;
                }else
                {   //se o usuário não foi aprovado ainda o sistema devolve uma mensagem de erro
                    $flash="Aguarde a nossa aprovação!";
                }
            }//verifica se a variavel log está definida
            if(isset($log))
            {   //mensagem de sucesso
                $flash="Você foi logado com sucesso!";
            }
            else
            {   //verifica se a variavel flash está vazia 
                if(empty($flash))
                {   //mensagem de erro
                    $flash="Ops! Digite seu e-mail e sua senha corretamente";
                }
                
            }
            echo $flash;
        }   
    }
?>
