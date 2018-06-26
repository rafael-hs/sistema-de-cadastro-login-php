<?php
//incluindo a library
require_once("../includes/phplot/phplot.php");


//define quais valores serão mostrados
$dadosgraf = array(
    array('20/06/2018',15),
    array('20/06/2018',15),
    array('20/06/2018',15),
    array('20/06/2018',15),
    array('20/06/2018',15),
    );
//cria um novo objeto do tipo PHPlot com ""px de largura e ""   px de altura
$plot = new PHPlot(800,600);
//organização do gráfico--------------------------------
$plot->SetTitle('Usuarios cadastrados na semana');
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

?>
