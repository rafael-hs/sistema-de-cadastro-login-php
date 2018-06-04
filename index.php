<?php
include("includes/header.php");
if(isset($logado))
{
include ("templates/home.php");
}else
{
include ("templates/login.php");
}
?>
