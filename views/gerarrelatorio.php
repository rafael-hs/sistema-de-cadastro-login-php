<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Relatórios</title>
<link href="https://fonts.googleapis.com/css?family=IM+Fell+French+Canon+SC" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="../css/style.css"/>
</head>
<body>

<div id="relatorio"><a href="../index.php" title="Home">Home&raquo;</a></div>

<div>
    <form id=nomedata action="../views/escolhadata.php" method="post">
    <label for="nomedata">Data:</label><input type="text" class="txt bradius" name="nomedata"/>
    <label for="nomedata2">Data:</label><input type="text" class="txt bradius" name="nomedata2"/>
    <label for="nomedata3">Data:</label><input type="text" class="txt bradius" name="nomedata3"/>
    <label for="nomedata4">Data:</label><input type="text" class="txt bradius" name="nomedata4"/>
    <label for="nomedata5">Data:</label><input type="text" class="txt bradius" name="nomedata5"/>
    <input type="submit" class="sb bradius" id="sbgerarrelatorio"  value="enviar"/>
    </form>

</div>
</body>
</html>
