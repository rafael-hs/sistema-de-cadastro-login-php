<?php 
if($startaction==1 && $acao=="logout")
{
   //tira o usuário logado
   //zera todas as sessions
   setcookie("logado","");
   unset($_SESSION['email'],$_SESSION['senha'],$_SESSION['nivel']);
}
?>