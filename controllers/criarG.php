<?php
include("../classes/DB.class.php");
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
    $data1=$_POST['nomedata'];
    $data2=$_POST['nomedata2'];
    $data3=$_POST['nomedata3'];
    $data4=$_POST['nomedata4'];
    $data5=$_POST['nomedata5'];
    $conectar= new DB;
    $conectar=$conectar->conectar();
    $buscard1=mysql_query("SELECT * FROM usuarios WHERE data LIKE '$data1'");
    $ndata1=mysql_num_rows($buscard1);
    $buscard2=mysql_query("SELECT * FROM usuarios WHERE data LIKE '$data2'");
    $ndata2=mysql_num_rows($buscard2);
    $buscard3=mysql_query("SELECT * FROM usuarios WHERE data='$data3'");
    $ndata3=mysql_num_rows($buscard3);
    $buscard4=mysql_query("SELECT * FROM usuarios WHERE data='$data4'");
    $ndata4=mysql_num_rows($buscard4);
    $buscard5=mysql_query("SELECT * FROM usuarios WHERE data='$data5'");
    $ndata5=mysql_num_rows($buscard5);
    
//incluindo a library
require_once("../includes/phplot/phplot.php");
$plot = new PHPlot( 800,600);
//organização do gráfico--------------------------------
$plot->SetTitle('Usuarios cadastrados na semana');
//define quais valores serão mostrados
//precosãp de uma casa decimal
$plot->SetPrecisionY(1);
//tipo de grafico
$dadosgraf = array(
    array($data1,$ndata1),
    array($data2,$ndata2),
    array($data3,$ndata3),
    array($data4,$ndata4),
    array($data5,$ndata5),
    );
//cria um novo objeto do tipo PHPlot com 500px de largura e 350px de altura



$plot->SetPlotType("bars");
//tipo de preenchimento do grafico text(data) e quantidade(porcentagem)
$plot->SetDataType("text-data");
//adiciona ao grafico os valores do array
$plot->SetDataValues($dadosgraf);

// Organiza eixo X ------------------------------
# Seta os traços (grid) do eixo X para invisível
$plot->SetXTickPos('none');
# Texto abaixo do eixo X
$plot->SetXLabel("Numero de cadastros por data");
# Tamanho da fonte que varia de 1-5
$plot->SetXLabelFontSize(2);
$plot->SetAxisFontSize(2);

// Organiza eixo Y -------------------------------
# Coloca nos pontos os valores de Y
$plot->SetYDataLabelPos('plotin');
// -----------------------------------------------
  
// Desenha o Gráfico -----------------------------
$plot->DrawGraph();
// -----------------------------------------------
echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=http://localhost/sistemaphp/views/escolhadata.php>";
?>
