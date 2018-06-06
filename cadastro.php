<?php
include("includes/header.php");
if(isset($logado))
{
include ("views/home.php");
}
else
{
include ("views/cadastro.php");
}
?>
