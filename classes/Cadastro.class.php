<?php 
    class Cadastro
    {
        public function cadastrar($nome,$endereco,$email,$senha) 
        {
            //tratamento das variaveis
            $nome = $nome;
            $endereco = $endereco;
            $senha = sha1($senha."senha");
            //conferindo se existe um mesmo usuário cadastrado
            $validaremail=mysql_query("SELECT * FROM usuarios WHERE email='$email'");
            $contar=mysql_num_rows($validaremail);
            if($contar==0)
            {   //inserção no banco de dados
                $insert=mysql_query("INSERT INTO usuarios(nome,endereco,email,senha,nivel,status)VALUES('$nome','$endereco','$email','$senha',1,0)");
            }else
            {   //mensagem de erro ao inserir usuário(porque ele já existe)
                $flash="Desculpe, mas já existe um usuário cadastrado com este e-mail em nosso sistema!";
            }
            //checa se $insert está definida
            if(isset($insert))
            {   //mensagem de sucesso ao cadastrar
                $flash="Cadastro realizado com sucesso, aguarde nossa aprovação!";
            }
            else
            {   //se a variavel flash for vazia devolve uma mensagem de erro
                if(empty($flash))
                {
                $flash="Ops! Houve um erro em nosso sistema, contate o adminstrador";
                }
            }
            //retorno para o usuário
            echo $flash;
        }
    }

?>