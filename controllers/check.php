<?php 
if(isset($_SESSION['email']) && isset($_SESSION['senha']))
{
    $logado=1;
    $nivel=$_SESSION['nivel'];
}
?>