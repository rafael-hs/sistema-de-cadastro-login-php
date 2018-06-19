<?php
//incluindo a library
require_once("../includes/phplot/phplot.php");


//define quais valores serão mostrados
$dadosgraf = array(
    array('janeiro 2018', 6.5),
    array('fevereiro 2018', 9.5),
    array('março', 9.5),
    array('abril', 4.5),
    array('maio', 6.5),
    array('junho', 11.0),
);
//cria um novo objeto do tipo PHPlot com 500px de largura e 350px de altura
$plot = new PHPlot(800,600);
//organização do gráfico--------------------------------
$plot->SetTitle('Usuários cadastrados na semana');
//precosãp de uma casa decimal
$plot->SetPrecisionY(1);
//tipo de grafico
$plot->SetPlotType("bars");
//tipo de preenchimento do grafico text(data) e quantidade(porcentagem)
$plot->SetDataType("text-data");
//adiciona ao grafico os valores do array
$plot->SetDataValues($dadosgraf);

// Organiza eixo X ------------------------------
# Seta os traços (grid) do eixo X para invisível
$plot->SetXTickPos('none');
# Texto abaixo do eixo X
$plot->SetXLabel("cadastro semanal");
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
?>