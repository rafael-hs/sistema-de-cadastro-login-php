<!DOCTYPE html>
<?php
include("includes/header.php");
?>
<html>
<head>
    <meta charset="utf-8" />
    <title>Cadastro</title>
    <link href="https://fonts.googleapis.com/css?family=IM+Fell+French+Canon+SC" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
    <div id="cadastrar"><a href="./index.php" title="Faça login!"> Login&raquo;</a></div>
	    <div id="login" class="form bradius" style="150px">
		<!--Mensagem de tratamento de exceção -->
		<div class="message bradius"style="<?php echo $display?>"><?php echo $msg;?></div>
		<!--Logo -->
		<div class="logo"><a href="<?php echo $home;?>" title="<?php echo $title;?>"><img class="logoimg" src="css/imagens/logo.png" alt="<?php echo $title;?>" title="<?php echo $title;?>"
            width="150" height="100"/></a></div>
		<div class="acomodar">
		<form action="?acao=cadastrar" method="post"> 
            <label for="nome">Nome:</label><input type="text" class="txt bradius" id="nome" name="nome"/>
            <label for="endereco">Endereço:</label><input type="text" class="txt bradius" id="endereco" name="endereco"/>		
			<label for="email">email:</label><input type="text" class="txt bradius" id="email" name="email" value=""/>	
			<label for="senha">Senha:</label><input type="password" class="txt bradius" id="senha" name="senha"/>
			<input type="submit" class="sb bradius" value="Cadastrar">
		</form>
		<!--acomodar-->
		</div>
		<!--login-->
	</div>
</body>
</html>