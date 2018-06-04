<?php
$page="Painel Administrativo";
include("templates/header.php");
?>
  <div id="cadastrar"><a href="./cadastro.php" title="Cadastre-se e venha fazer sua festa!"> Cadastre-se &raquo;</a></div>
	<div id="login" class="form bradius">
		<div class="message" style="<?php echo $display?>"><?php echo $msg;?></div>
		<div class="logo"><a href="<?php echo $home;?>" title="<?php echo $title;?>"><img class="logoimg" src="css/imagens/logo.png"
    alt="<?php echo $title;?>" title="<?php echo $title;?>"
		width="150" height="100"/></a></div>
		<div class="acomodar">
      <h1>Seja bem vindo!</h1>
		<!--acomodar-->
		</div>
		<!--login-->
	</div>
</body>
</html>
