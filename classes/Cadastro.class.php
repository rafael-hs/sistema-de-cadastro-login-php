<?php 
    class Cadastro
    {
        public function cadastrar($nome,$endereco,$email,$senha) 
        {
            //tratamento das variaveis
            $nome = ucvwords(strtolower($nome));
            $nome = ucvwords(strtolower($endereco));
            $nome = sha1($senha."senha");
            //inserção no banco de dados
            $insert=mysql_query("INSERT INTO usuarios(nome,endereco,email,senha,nivel,status)VALUES($nome,$endereco,$email,$senha,1,0");

            if(isset($insert))
            {
                $flash="Cadastro realizado com sucesso, aguarde nossa aprovação";
            }else
            {
                $flash="Ops! Houve um erro em nosso sistema, contate o adminstrador";
            }
            //retorno para o usuário
            echo $flash;
        }
    }

?>