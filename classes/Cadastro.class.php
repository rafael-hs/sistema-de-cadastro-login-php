<?php 
    class Cadastro
    {
        public function cadastrar($nome,$usuario,$idade,$endereco,$email,$senha) 
        {
            //tratamento das variaveis
            $nome = $nome;
            $usuario = $usuario;
            $idade = $idade;
            $endereco = $endereco;
            $senha = sha1($senha."senha");
            $data = date('Y-m-d');
            //conferindo se existe um mesmo email cadastrado
            $validarusuario=mysql_query("SELECT * FROM usuarios WHERE usuario='$usuario'");
            $contaru=mysql_num_rows($validarusuario);
            if($contaru==0)
            {
                //conferindo se existe um mesmo email cadastrado
                $validaremail=mysql_query("SELECT * FROM usuarios WHERE email='$email'");
                $contar=mysql_num_rows($validaremail);
                if($contar==0)
                {   //inserção no banco de dados
                    $insert=mysql_query("INSERT INTO usuarios(nome,usuario,idade,endereco,email,senha,nivel,status,data)VALUES('$nome','$usuario','$idade','$endereco','$email','$senha',1,0,'$data')");
                }else
                {   //mensagem de erro ao inserir usuário(porque ele já existe)
                    $flash="Desculpe, mas já existe um usuário cadastrado com este e-mail em nosso sistema!";
                }
            }else
            {   //mensagem de erro ao inserir usuário(porque ele já existe)
                $flash="Desculpe, mas já existe o mesmo usuário em nosso sistema!";
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
