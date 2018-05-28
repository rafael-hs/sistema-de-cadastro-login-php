<?php
include("includes/header.php");

?>
<!DOCTYPE html>
<html> 
<head>
<meta charset="utf-8" />
<title>Login</title> 
<link href="https://fonts.googleapis.com/css?family=IM+Fell+French+Canon+SC" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
	<div id="cadastrar"><a href="./cadastro.php" title="Cadastre-se e venha fazer sua festa!"> Cadastre-se &raquo;</a></div>
	<div id="login" class="form bradius">
		<div class="message"></div>
		<div class="logo"><a href="<?php echo $home;?>" title="<?php echo $title;?>"><img class="logoimg" src="css/imagens/logo.png" alt="<?php echo $title;?>" title="<?php echo $title;?>"
			width="150" height="100"/></a></div>
		<div class="acomodar">
		<form name="signup" method="post" action="">
			<label for="email">email:</label><input type="text" class="txt bradius" id="email" name="email" value=""/>
			<label for="senha">Senha:</label><input type="password" class="txt bradius" id="senha" name="senha" value=""/>
			<input type="submit" class="sb bradius" value="Entrar">
		</form>
		<!--acomodar-->
		</div>
		<!--login-->
	</div>
		 
</body> 
</html>
