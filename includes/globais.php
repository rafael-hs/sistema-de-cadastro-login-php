<?php 
$home="http://localhost/sistemaphp/";
$title="sistemaPHP";
$acao="";
$startaction="";
$msg="";
$dadosdografico="";
//super global get acao do sistema
if(isset($_GET["acao"]))
{
   $acao=$_GET["acao"];
   $startaction=1;
}
?>