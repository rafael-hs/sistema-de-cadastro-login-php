<?php 
if(isset($_SESSION['usuario']) && isset($_SESSION['senha']))
{
    $logado=1;
    $nivel=$_SESSION['nivel'];
}
?>