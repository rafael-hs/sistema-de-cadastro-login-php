		<?php
			if($nivel==2)
			{
			$page="Painel Administrativo";
			include("views/header.php");
			?>
		<div id="cadastrar"><a href="index.php?acao=logout" title="Fazer logout">Logout &raquo;</a></div>
		<div id="relatorio"><a href="views/gerarrelatorio.php" title="Gerar relatório">Relatório &raquo;</a></div>  
		<div id="login" class="form bradius">
		<div class="message" style="<?php echo $display?>"><?php echo $msg;?></div>
		<div class="logo"><a href="<?php echo $home;?>" title="<?php echo $title;?>"><img class="logoimg"
			src="css/imagens/logo.png"alt="<?php echo $title;?>" title="<?php echo $title;?>"
			width="150" height="100"/></a>
		</div>
		<div class="acomodar">
			<!--cria a tabela que vai mostrar os usuários a serem aprovados ou bloqueados -->
			<table width="100%" border="0">
				<tr>
					<th>Nome</th>
					<th>Status</th>
					<th>Ação</th>
				</tr>
				<?php
				$buscarusuarios=mysql_query("SELECT * FROM usuarios WHERE nivel='1'");
				if(mysql_num_rows($buscarusuarios)==0)
				{
					echo "Nenhum usuário cadastrado no sistema!";
				}else{
					while($linha=mysql_fetch_array($buscarusuarios))
					{
				?>
				<tr>
					<th><?php echo $linha['nome'];?></th>
					<th><?php echo $linha['status'];?></th>
					<th><?php $id=$linha['id']; if($linha['status']==0){echo "<a href=\"index.php?acao=aprovar&amp;id=$id\">Aprovar</a>";}else{echo "<a href=\"index.php?acao=bloquear&amp;id=$id\">Bloquear</a>";}?></th>
				</tr>
				<?php }}?>
			</table>
			<!--acomodar-->
		</div>
		<!--login-->
	</div>
<?php }else{include("views/homeusuario.php");?>
				
<?php			} ?>
</body>
</html>
